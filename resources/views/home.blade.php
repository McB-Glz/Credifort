@extends('layouts.master')
@section('title', 'Bienvenido')
@section('class', 'home')


@section('content')

  <div class="header-home container-fluid" id="section-header">
    <div class="overlay">
    </div>
    <div class="row">
      <div class="col-xs-12">
      <h2>
        <small>Préstamos en menos de 24 horas, sin necesidad de aval ni garantía.</small>
        <br/>
        <br class="visible-xs-block" />
        Cada día más personas están experimentado la comodidad de los préstamos personales a través de Credifort, una forma totalmente nueva de disponer dinero.
      </h2>
      </div>
    </div>
  </div>
  <div class="container home-one">
    <div class="row">
      <h3>Nunca antes fue tan fácil pedir un préstamo</h3>
      <p>Ofrecemos servicios financieros, contamos con un programa de lealtad  para mejorar la vida de nuestros clientes y ayudarles a resolver sus problemas de dinero.</p>
    </div>
    <div class="row iconos">
      <div class="col-xs-12 col-sm-4">
        <div class="img-wrapper compu">
          <img src="{{ url('assets/img/elements/cotiza.png') }}" class="img-responsive">
        </div>
        <p>Cotiza en tan sólo 2 minutos sabrás cuánto pagar</p>
      </div>
       <div class="col-xs-12 col-sm-4">
        <div class="img-wrapper clock">
          <img src="{{ url('assets/img/elements/clock.png') }}" class="img-responsive">
        </div>
        <p>Aprobación y dinero en menos de 24 hrs</p>
      </div>
       <div class="col-xs-12 col-sm-4">
        <div class="img-wrapper money">
          <img src="{{ url('assets/img/elements/money.png') }}" class="img-responsive">
        </div>
        <p>Obtenga su dinero fácil y rápido ahora</p>
      </div>
    </div>
  </div>
  <div class="container-fluid home-dos">
    <div class="row">
      <div class="col-xs-12">
        <h3>¿Por qué miles de personas eligen préstamos credifort?</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h4>Entidad Regulada</h4>
        <p>Tu estás pidiendo prestado directamente a Credifort, un prestamista directo con licencia, no un intermediario anónimo.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h4>No hay cargos ocultos</h4>
        <p>Nuestros términos y condiciones son claros y transparentes. Queremos que tu estés informado, no confundido.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h4>No hay volcaduras</h4>
        <p>Si te metes en problemas, trabajamos contigo. No hay manera de quedar atrapado en un ciclo de deuda.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <h4>Oportunidades</h4>
        <p>Credifort te ofrece una manera fácil, segura y confiable de conseguir más dinero, a mejores precios, por períodos de tiempo más largos.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h4>Pagos accesibles</h4>
        <p>Hacemos los pagos accesibles por lo que se ajusta a tu presupuesto mensual, para llegar al mejor pago y términos para tu préstamo.</p>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h4>Servicio al cliente</h4>
        <p>Nuestro equipo está aquí dedicados a responder tus preguntas los 7 días de la semana por teléfono o por correo electrónico.</p>
      </div>
    </div>
  </div>
  <div class="container home-tres">
    <div class="row">
      <div class="col-xs-12">
        <h3>Beneficios para satisfacer tus necesidades</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Entendemos que pueden suceder inesperados acontecimientos financieros y estamos aquí para ayudarte.</p><br/>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Si tu quieres consolidar una deuda, pagar gastos inesperados, proveer para su familia cuando tu experimentas una emergencia médica, quieres disfrutar de unas vaciones, o simplmente quieres comprate algo, te entendemos.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>¡Nuestro objetivo en Credifort es proporcionar acceso a los préstamos personales a tasas de interés competitivas en tiempo y forma Revise sus tasas de préstamo hoy!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <a href="{{ url('/cotiza') }}" class="btn btn-block btn-cotiza">Cotiza tu préstamo</a>
      </div>
    </div>

  </div>

@stop

@section('js')

@stop
