<?php

namespace app\Http\Services;

use App\Exceptions\QuoteException;
use App\Http\Services\FinancialClass;

class QuoteService
{
    /**
     * FinancialClass instance.
     *
     * @var \App\Http\Services\FinancialClass
     */
    protected $financialClass;

    /**
     * Terms per year instance
     * float.
     */
    protected $termsPerYear;

    /**
     * Total amount instance.
     */
    protected $totalAmount;

    /**
     * Terms instance.
     */
    protected $terms;

    /**
     * Term payment instance.
     */
    protected $termPayment;

    /**
     * Payments instance.
     */
    protected $payments;

    /**
     * IRR instance.
     */
    protected $irr;

    /**
     * Interests reference instance.
     */
    protected $interestsTable;

    /**
     * Tax instance.
     */
    protected $tax;

    /**
     * Create a new controller instance.
     *
     * @param \App\Http\Services\FinancialClass $financialClass
     *
     * @return void
     */
    public function __construct(FinancialClass $financialClass)
    {
        $this->financialClass = $financialClass;

        $this->interestsTable = config('interests');
        $this->tax = 0.16; // 16%
        $this->termsPerYear = 24; // 24 quincenas

        $this->setTerms(18);
        $this->setTotalAmount(15000);
    }

    /**
     * Process quote.
     *
     * @return array
     */
    public function processQuote()
    {
        $this->calculateTermPayment();
        $this->calculatePayments();
        $this->calculateIRR();

        $response['monto'] = number_format($this->totalAmount, 2);
        $response['quincenas'] = $this->terms;

        $response['tasa_interes_anual'] = $this->getAnualRate(true);
        $response['tasa_interes_quincenal'] = $this->getTermRate(true);
        $response['tasa_interes_quincenal_con_iva'] = $this->getTermRate(true, ['withTax' => true]);

        $response['pago_quincenal'] = number_format($this->getTermPayment(), 2);
        $response['pagos'] = $this->payments;

        $response['tir'] = $this->getIRR(true);
        $response['tir_anual'] = $this->getAnualIRR(true);
        $response['cat'] = $this->getCat(true);

        return $response;
    }

    //******************
    // Setters
    //******************

    /**
     * Set total amount.
     *
     * @param float $value
     */
    public function setTotalAmount($value)
    {
        if (!$this->validateAmount($value)) {
            throw new QuoteException('El valor ingresado en total es inválido');
        }

        return $this->totalAmount = $value;
    }

    /**
     * Set terms count.
     *
     * @param float $value
     */
    public function setTerms($value)
    {
        if (!$this->validateTerms($value)) {
            throw new QuoteException('El valor ingresado en quincenas es inválido');
        }

        return $this->terms = $value;
    }

    //******************
    // Getters
    //******************

    /**
     * Get quote total amount.
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Get quote terms count.
     *
     * @return float
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Get each term payment value.
     *
     * @return float
     */
    public function getTermPayment()
    {
        return $this->termPayment;
    }

    /**
     * Get quote payments.
     *
     * @return array
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Get quote anual interest rate.
     *
     * @return float | string
     */
    protected function getAnualRate($string = false)
    {
        $value = $this->interestsTable[$this->terms][$this->totalAmount];

        if ($string) {
            return $this->stringifyValue($value);
        }

        return $value;
    }

    /**
     * Get quote term interest rate.
     *
     * @return float | string
     */
    protected function getTermRate($string = false, $params = [])
    {
        $value = $this->getAnualRate() / $this->termsPerYear;

        if (isset($params['withTax']) && $params['withTax'] === true) {
            $value = $value * (1 + $this->tax);
        }

        if ($string) {
            return $this->stringifyValue($value);
        }

        return $value;
    }

    /**
     * Get quote IRR rate.
     *
     * @return float | string
     */
    protected function getIRR($string = false)
    {
        $value = $this->irr;

        if ($string) {
            return $this->stringifyValue($value);
        }

        return $value;
    }

    /**
     * Get quote anual IRR rate.
     *
     * @return float | string
     */
    protected function getAnualIRR($string = false)
    {
        $value = $this->irr * $this->termsPerYear;

        if ($string) {
            return $this->stringifyValue($value);
        }

        return $value;
    }

    /**
     * Get quote CAT.
     *
     * @return float | string
     */
    protected function getCat($string = false)
    {
        $value = $this->financialClass->effect($this->getAnualIRR(), $this->termsPerYear);

        if ($string) {
            return $this->stringifyValue($value);
        }

        return $value;
    }

    //******************
    // Validators
    //******************

    /**
     * Validate terms count value and it's existance on the interests config array.
     *
     * @param float $value
     *
     * @return bool
     */
    protected function validateTerms($value = null)
    {
        $value = (empty($value)) ? $this->terms : $value;

        return array_key_exists($value, $this->interestsTable);
    }

    /**
     * Validate total amount value and it's existance on the interests config array.
     *
     * @param float $value
     *
     * @return bool
     */
    protected function validateAmount($value = null)
    {
        $value = (empty($value)) ? $this->terms : $value;

        if (!$this->validateTerms()) {
            throw new QuoteException('El valor ingresado en quincenas es inválido');
        }

        return array_key_exists($value, $this->interestsTable[$this->terms]);
    }

    //******************
    // Helper methods
    //******************

    /**
     * Calculate each term payment.
     *
     * @return float
     */
    protected function calculateTermPayment()
    {
        $p = $this->totalAmount;
        $term = $this->terms;
        $interests = $this->getTermRate(false, ['withTax' => true]);

        $r = $interests;
        $part1 = pow((1 + $r), $term);
        $part2 = $p * $r * $part1;
        $part3 = $part1 - 1;
        $emi = (100 * ($part2 / $part3)) / 100;

        return $this->termPayment = round($emi, 2);
    }

    /**
     * Calculate and generate payments array.
     *
     * @return array
     */
    protected function calculatePayments()
    {
        $payments = [];

        $paymentValues = $this->calculatePaymentValues();

        for ($i = 1; $i <= $this->terms; ++$i) {
            $payments[$i] = [
                'numero_pago'            => $i,
                'saldo_insoluto'         => round($paymentValues['balance'], 2),
                'amortizacion'           => round($paymentValues['amortization'], 2),
                'interes'                => round($paymentValues['termPaymentInterest'], 2),
                'iva'                    => round($paymentValues['termPaymentInterestTax'], 2),
                'pago'                   => round($this->termPayment, 2),
                'pago_quincenal_sin_iva' => round($paymentValues['termPaymentWithoutTax'], 2),
            ];

            $paymentValues = $this->calculatePaymentValues($paymentValues['balance'] - $paymentValues['amortization']);
        }

        return $this->payments = $payments;
    }

    /**
     * Calculate each payment values.
     *
     * @param float $newBalance
     *
     * @return array
     */
    protected function calculatePaymentValues($newBalance = null)
    {
        $values['balance'] = (empty($newBalance)) ? $this->totalAmount : $newBalance;
        $values['termPaymentInterest'] = $values['balance'] * $this->getTermRate();
        $values['termPaymentInterestTax'] = $values['termPaymentInterest'] * $this->tax;
        $values['amortization'] = $this->termPayment - $values['termPaymentInterest'] -  $values['termPaymentInterestTax'];
        $values['termPaymentWithoutTax'] = $this->termPayment -  $values['termPaymentInterestTax'];

        return $values;
    }

    /**
     * Calculate quote IRR.
     *
     * @return float | string
     */
    protected function calculateIRR()
    {
        $payments = [
            $this->totalAmount * 0.99 * -1,
        ];

        foreach ($this->payments as $payment) {
            $payments[] = $payment['pago_quincenal_sin_iva'];
        }

        return $this->irr = $this->financialClass->IRR($payments);
    }

    /**
     * Convert value to readable string.
     *
     * @param float  $value
     * @param string $type
     *
     * @return string
     */
    protected function stringifyValue($value, $type = 'percent')
    {
        switch ($type) {
            case 'percent':
                return round($value * 100, 2).'%';
            break;
        }

        return $value;
    }
}
