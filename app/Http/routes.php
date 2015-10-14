<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//*** Welcome

// $app->get('/', ['as'   => 'welcome', function() use ($app)
// {
//     return view('landing');
// }]);

//*** End Welcome

$app->get('/', function () {
    return view('home');
});

$app->get('quienes-somos', function () {
    return view('quienes-somos');
});

$app->get('nuestros-servicios', function () {
    return view('nuestros-servicios');
});

$app->get('faq', function () {
    return view('faq');
});

$app->get('contacto', function () {
    return view('contacto');
});

$app->post('send-email', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'nombre'     => 'required',
        'apellidos'  => 'required',
        'tel'        => 'required|numeric|digits_between:8,13',
        'email'      => 'required|email',
        'asunto'     => 'required',
        'empresa'    => 'required',
        'telOficina' => 'required|numeric|digits_between:8,10',
        'mensaje'    => 'required',
    ]);

    $data['name'] = $app->request->input('nombre');
    $data['lastname'] = $app->request->input('apellidos');
    $data['tel'] = $app->request->input('tel');
    $data['email'] = $app->request->input('email');
    $data['asunto'] = $app->request->input('asunto');
    $data['empresa'] = $app->request->input('empresa');
    $data['telOficina'] = $app->request->input('telOficina');
    $data['message'] = $app->request->input('mensaje');
    $data['subject'] = 'Contacto Credifort.com | '.$data['email'];

    $data['message'] = '
DATOS DE CONTACTO

Nombre:
'.$data['name'].$data['lastname'].'

Teléfono:
'.$data['tel'].'

Email:
'.$data['email'].'

Asunto:
'.$data['asunto'].'

Empresa:
'.$data['empresa'].'

Teléfono de Oficina:
'.$data['telOficina'].'

Mensaje:
'.$data['message'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      //$message->from('no-reply@credifort.com', 'Credifort');
      $message->to(env('MAIL_TO'));
      $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
    }

    echo json_encode($response);
    die();
  // }

});

$app->get('cotiza', function () {
    return view('cotiza');
});

$app->get('aviso-de-privacidad', function () {
    return view('aviso-de-privacidad');
});

$app->post('cotizacion', [
    'as'   => 'quote.process',
    'uses' => 'QuoteController@index',
]);

$app->post('solicitud', [
    'as'   => 'quote.send',
    'uses' => 'QuoteController@send',
]);
