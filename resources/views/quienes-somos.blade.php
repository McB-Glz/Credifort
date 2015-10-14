@extends('layouts.master')
@section('title', 'Quiénes Somos')
@section('class', 'about')


@section('content')

  <div class="header-about container-fluid" id="section-header">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-xs-12">
      <h2>Quiénes somos</h2>
      <p>Somos una companía de préstamos aprobada que se dedica a ofrecer soluciones financieras a corto plazo para mejorar la vida de nuestros clientes y ayudarles a resolver sus problemas de dinero.</p>
      </div>
    </div>
  </div>
  <div class="container about-uno">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <h3>Acerca de nosotros</h3>
        <p>Empresa 100% mexicana dedicada a ofrecer soluciones y productos financieros de crédito, a tasas de interés competitivas, para personas que busquen cumplir sus sueños.</p>
        <p>Con Credifort tu puedes pedir préstamos para cualquier imprevisto de forma segura, simple, rápida y libre de estrés. </p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <h3>Misión</h3>
        <p>Apoyar el desarrollo de personas y empresas en México, proporcionándoles los productos y soluciones financieras necesarios para sobresalir en su entorno.</p>
        <h3>Visión</h3>
        <p>Ser parte de los sueños de nuestros clientes.</p>
      </div>
    </div>
    <div class="row about-info">
      <div class="col-xs-12 col-sm-6">
        <h3>Por que nosotros</h3>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Tasas competitivas</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Asesoría personalizada para que nuestros clientes puedan lograr sus sueños</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Soluciones rápidas de aplicación</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Respuesta dentro de las primeras 24 horas</p>
          </div>
        </div>
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Obtienes tu dinero de inmediato</p><br class="visible-xs-block">
          </div>
        </div>

      </div>
      <div class="col-xs-12 col-sm-6">
        <h3>Valores</h3>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Compromiso</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Responsabilidad</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Ética</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Transparencia</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Lealtad</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Confianza</p>
          </div>
        </div>

      </div>
    </div>
  </div>


@stop

@section('js')

@stop
