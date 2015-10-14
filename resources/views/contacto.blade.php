@extends('layouts.master')
@section('title', 'Contáctanos')
@section('class', 'contacto')


@section('content')

  <div class="header-contacto container-fluid" id="section-header">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-xs-12">
      <h2>Atención Personalizada</h2>
      <p>Estamos siempre dispuestos a ayudarte. Por favor, ¡contáctanos!<br/>Una solución real para mejorar la situación financiera de nuestros clientes</p>
      </div>
    </div>
  </div>
  <div class="container contacto-uno">
    <div class="row">
      <div class="col-xs-12">
        <h3>Contáctanos</h3>
        <p>Puedes tramitarlo directamente en nuestras sucursales o contactarnos vía electrónica o telefónica, te atenderan personalmente.</p>
        <p>Tu necesitas sólo <span class="txt-blue">30</span> segundos para disfrutar de su prestamo. <span class="txt-blue">Sólo dinos:</span></p>
      </div>
    </div>

    <div class="row contacto-form">
      <div class="col-xs-12 col-sm-6">
        <div id="response" class="alert" role="alert" style="display: none;"></div>
        <form id="contactForm" method="POST" action="{{ url('/send-email') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          <div class="row">
            <div class="form-group col-xs-12">
              <input type="text" class="form-control bg-form" name="nombre" id="nombre" placeholder="Nombre">
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <input type="text" class="form-control bg-form" name="apellidos" id="apellidos" placeholder="Apellidos">
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <input type="tel" class="form-control bg-form" name="tel" id="tel" placeholder="Teléfono casa o celular">
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <input type="email" class="form-control bg-form" name="email" id="email" placeholder="Correo electrónico">
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <select class="form-control" name="asunto" id="asunto" form="contactForm" title="Asunto (Elige Uno)">
                <option value="" selected="selected">Asunto (Elige Uno)</option>
                <option value="personal">Personal</option>
                <option value="empresa">Empresa</option>
              </select>
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <input type="text" class="form-control bg-form" name="empresa" id="empresa" placeholder="Empresa">
            </div>
          </div>
          <div class="row">
             <div class="form-group col-xs-12">
              <input type="tel" class="form-control bg-form" name="telOficina" id="telOficina" placeholder="Teléfono Oficina">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <textarea type="text" class="form-control bg-form" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
            </div>
          </div>
          <div class="row" >
            <div class="col-xs-12">
              <button type="submit" class="btn btn-block btn-enviar">Enviar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-xs-12 col-sm-6">
        <h4>Atención Personalizada</h4>
        <address>
          Bosque de Radiatas #32 of. 403<br/>
          Col. Bosque de las Lomas. Cuajimalpa de Morelos.<br/>
          México D.F. C.P. 05120
        </address>
        <p><i class="fa fa-phone"></i> <a href="tel:52596300">5259 6300</a></p>
        <p><i class="fa fa-envelope"></i> <a href="mailto:prestamo@credifort.com">prestamo@credifort.com</a></p>
        <br/>
        <h4>UNE</h4>
        <p><i class="fa fa-phone"></i> <a href="tel:52596300">5259 6300</a></p>
        <p><i class="fa fa-envelope"></i> <a href="mailto:une@credifort.com">une@credifort.com</a></p>
        <br/>
        <h4>Síguenos en:</h4>
        <a href="https://www.facebook.com/credifort" target="_blank"><i class="fa fa-facebook fa-2x"></i> </a>
        <a href="https://twitter.com/credifort" target="_blank"><i class="fa fa-twitter fa-2x"></i> </a>
        <a href="https://www.linkedin.com/company/10042559?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10042559%2Cidx%3A1-1-1%2CtarId%3A1442850894115%2Ctas%3Acredifort" target="_blank"><i class="fa fa-linkedin fa-2x"></i> </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.558894070327!2d-99.252476!3d19.3882434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201190dbdc613%3A0xfc11e8b04409f998!2sBosque+de+Radiatas+32%2C+Bosque+de+las+Lomas%2C+05120+Ciudad+de+M%C3%A9xico%2C+D.F.%2C+Mexico!5e0!3m2!1sen!2s!4v1442878702555" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </div>


@stop

@section('js')

@stop
