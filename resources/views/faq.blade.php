@extends('layouts.master')
@section('title', 'Preguntas Frecuentes')
@section('class', 'faq')


@section('content')

  <div class="header-faq container-fluid" id="section-header">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-xs-12">
      <h2>Preguntas Frecuentes</h2>
      <p>Credifort. quiere ayudar a los prestatarios a ser más dignos de crédito y cumplir sus sueños.<br/>¿Tienes una pregunta? Estamos aquí 7 días a la semana para ayudarte. </p>
      </div>
    </div>
  </div>
  <div class="container faq-uno">
    <div class="row">
      <div class="col-xs-12">
        <h3>¿Tienes algunas preguntas? ¡Tenemos las respuestas!</h3>
        <p>No te preocupes, seguramente en esta sección encontrarás todas las respuestas a ellas y muchas más, en caso de que no sea respondida mándanos un mensaje con ella.</p>
      </div>
    </div>
    <div class="row faqs">
      <div class="col-xs-12">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-caret-down"></i>Si ya pagué mi ultimo crédito ¿cuándo puedo pedir el siguiente?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <p>Al haber cumplido puntualmente con todos tus pagos, automáticamente tienes tu nueva línea de crédito pre aprobada por lo que inmediatamente puedes solicitar el crédito.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-caret-down"></i>¿Qué pasa si tengo una queja?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
               <p>En Credifort tomamos las quejas de nuestros clientes muy enserio, por lo que siempre tendremos un enfoque justo y objetivo al investigar tu queja, puedes contactarnos a través de este correo electrónico o a este numero.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-caret-down"></i>¿Cuánto puedo pedir prestado?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <p>Para saber de cuanto es mi préstamo, consulta nuestro cotizador en línea.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="fa fa-caret-down"></i>¿Como me puede ayudar un préstamo?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <p>La vida esta repleta de sueños, para lograr estos sueños nos cuesta mucha dedicación y trabajo, en Credifort queremos escuchar tu sueño y ayudarte a cumplirlo brindándote este dinero extra para cumplirlo.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <i class="fa fa-caret-down"></i>¿Qué pasa si mi empresa no esta afiliada?
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
              <p>Si tu empresa no esta afiliada nos encantaría poder trabajar con ella para que tu y tus colaboradores puedan tener la comodidad y facilidad de solicitar crédito en el lugar de trabajo. <a href="{{ url('/contacto') }}">Da click aquí</a> para poder empezar a trabajar juntos.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <i class="fa fa-caret-down"></i>Si tengo una situación financiera difícil ¿qué puedo hacer?
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
              <div class="panel-body">
                <p>Entendemos que cualquier persona puede enfrentar una situación difícil y sabemos lo que se siente, por lo que si crees que no vas a poder realizar tu pago o hay un atraso en el, te contactes lo mas pronto con nosotros para que te podamos ayudar.</p>
              </div>
            </div>
          </div>

          <div class="panel">
            <div class="panel-heading" role="tab" id="headingSeven">
              <h4 class="panel-title">
                <a class="collapsed titulo" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <i class="fa fa-caret-down"></i>¿Puedo obtener un préstamo si tengo mal historial crediticio?
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
              <div class="panel-body">
                <p>En Credifort creemos que todos tenemos una segunda oportunidad en la vida por lo que si has tenido mal historial crediticio, tienes una gran probabilidad de recibir un préstamo.</p>
              </div>
            </div>
          </div>
        </div>
        <p>Si tu pregunta no fue respondida, por favor mándala a <a href="mailto:contacto@credifort.com">contacto@credifort.com</a></p>
      </div>
    </div>
  </div>


@stop

@section('js')

@stop
