<?php

namespace app\Http\Controllers;

use App\Exceptions\QuoteException;
use App\Http\Services\QuoteService;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Mail;

class QuoteController extends BaseController
{
    /**
     * QuoteService instance.
     *
     * @var \App\Http\Services\QuoteService
     */
    protected $quoteService;

    /**
     * Create a new controller instance.
     *
     * @param \App\Http\Services\QuoteService $quoteService
     *
     * @return void
     */
    public function __construct(QuoteService $quoteService)
    {
        $this->quoteService = $quoteService;
    }

    /**
     * Get processed quote.
     *
     * @param Request $request
     *
     * @return array
     */
    public function index(Request $request, $params = [])
    {
        $totalAmount = $request->get('monto');
        $terms = $request->get('quincenas');

        try {
            $this->quoteService->setTotalAmount($totalAmount);
            $this->quoteService->setTerms($terms);

            $quote = $this->quoteService->processQuote();
        } catch (QuoteException $e) {
            $response['status'] = 'error';
            $response['message'] = $e->getMessage();

            return $response;
        }

        $quote['html'] = $this->buildHtmlTable($quote, $params);

        return $quote;
    }

    public function send(Request $request)
    {
        $quote = $this->index($request, ['inlineCSS' => true]);
        $data['table'] = $quote['html'];
        $data['pagos'] = $quote['pago_quincenal'];

        // $data['monto'] = '$ 15,000.00';
        // $data['quincenas'] = '8';
        // $data['nameRes'] = 'Nombre';
        // $data['lastnameRes'] = 'Apellido';
        // $data['telRes'] = '8888 8888';
        // $data['emailRes'] = 'ejemplo@mail.com';
        // $data['pagos'] = '$150';

        $response = ['status' => 'error'];
        $response['message'] = 'No ha sido posible enviar tu solicitud, por favor intente de nuevo más tarde';

        $this->validate($request, [
            'monto'       => 'required',
            'quincenas'   => 'required',
            'nameRes'     => 'required',
            'lastnameRes' => 'required',
            'telRes'      => 'required|numeric|digits_between:8,10',
            'emailRes'    => 'required|email',
        ]);

        $data['monto'] = $request->input('monto');
        $data['quincenas'] = $request->input('quincenas');
        $data['nameRes'] = $request->input('nameRes');
        $data['lastnameRes'] = $request->input('lastnameRes');
        $data['telRes'] = $request->input('telRes');
        $data['emailRes'] = $request->input('emailRes');

        // return view('solicitud', $data);

        $mail = Mail::send('solicitud-min', $data, function ($message) use ($data) {
          $message->subject('Solicitud de Préstamo Online | Credifort '.$data['emailRes']);
          //$message->from('no-reply@credifort.com', 'Credifort');
          $message->to($data['emailRes']);
          $message->bcc(env('MAIL_TO'));
          $message->replyTo($data['emailRes'], $data['nameRes']);
        });

        if ($mail) {
            $response = ['status' => 'ok'];
            $response['message'] = '¡Gracias! Tu solicitud ha sido enviada correctamente.';
        }

        echo json_encode($response);
        die();
    }

    /**
     * Build HTML quote table.
     *
     * @param array $quote
     *
     * @return string
     */
    protected function buildHtmlTable($quote, $params = [])
    {
        $table_css = '';
        $tr_css = '';
        $td_css = '';
        $pull_right_css = '';
        $infos_css = '';
        $odd_css = '';

        if (!empty($params['inlineCSS'])) {
            $table_css = 'style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;width:100%;max-width:100%;margin-bottom:20px;"';
            $tr_css = 'vertical-align: top; text-align: left; padding: 0;';
            $td_css = <<<EOD
style="word-break: initial; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #666666; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #dddddd;"
EOD;
            $infos_css = <<<EOD
'style="color: #666666; font-family: 'Helvetica', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;";
EOD;
            $odd_css = 'background-color: #f9f9f9;';
            $pull_right_css = 'style="float:right;"';
        }

        $html = '';
        if (empty($params['inlineCSS'])) {
            $html .= '<div class="table-responsive">';
        }
        $html .= '<table class="table table-striped" '.$table_css.'>';
        $html .= '<tr style="'.$tr_css.$odd_css.'">';
        $html .= '<th '.str_replace(';"', ';word-break: normal;"', $td_css).'>No. de Pago</th>';
        $html .= '<th '.$td_css.'>Saldo Insoluto</th>';
        $html .= '<th '.$td_css.'>Amortización</th>';
        $html .= '<th '.$td_css.'>Interés</th>';
        $html .= '<th '.$td_css.'>IVA</th>';
        $html .= '<th '.$td_css.'>Pago</th>';
        $html .= '</tr>';

        $i = 1;
        $row_css = '';
        foreach ($quote['pagos'] as $payment) {
            $row_css = $tr_css;
            if ($i % 2 == 0) {
                $row_css = $tr_css.$odd_css;
            }

            $html .= '<tr style="'.$row_css.'">';
            $html .= '<td '.$td_css.'>'.$payment['numero_pago'].'</td>';
            $html .= '<td '.$td_css.'>$'.number_format($payment['saldo_insoluto'], 2).'</td>';
            $html .= '<td '.$td_css.'>$'.number_format($payment['amortizacion'], 2).'</td>';
            $html .= '<td '.$td_css.'>$'.number_format($payment['interes'], 2).'</td>';
            $html .= '<td '.$td_css.'>$'.number_format($payment['iva'], 2).'</td>';
            $html .= '<td '.$td_css.'>$'.number_format($payment['pago'], 2).'</td>';
            $html .= '</tr>';

            ++$i;
        }

        $html .= '</table>';
        if (empty($params['inlineCSS'])) {
            $html .= '</div>';
        }
        // $html .= '<p class="infos"><b>Tasa de Interés Anual</b> <span class="pull-right">'.$quote['tasa_interes_anual'].'</span></p>';
        // $html .= '<p class="infos"><b>CAT</b> <span class="pull-right">'.$quote['cat'].'</span></p>';


        return $html;
    }
}
