@extends('layouts.master')
@section('title', 'Crédito de Nómina')
@section('class', 'servicios')


@section('content')

  <div class="header-servicios container-fluid" id="section-header">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-xs-12">
      <h2>Servicios</h2>
      <p>Cada día mas personas están experimentando los préstamos personales a través de Credifort. Préstamos en menos de 24 horas sin necesidad de aval ni garantía.</p>
      </div>
    </div>
  </div>
  <div class="container servicios-uno">
    <div class="row servicios-tabs">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#credito" aria-controls="credito" role="tab" data-toggle="tab" class="btn btn-tab">Crédito de Nómina</a></li>
          <li role="presentation"><a href="#anticipo" aria-controls="anticipo" role="tab" data-toggle="tab" class="btn btn-tab">Anticipo de nómina</a></li>
          <li role="presentation"><a href="#consumo" aria-controls="consumo" role="tab" data-toggle="tab" class="btn btn-tab">Crédito al Consumo</a></li>
        </ul>
      </div>
    </div>

    <div class="tab-content">
       <div role="tabpanel" class="tab-pane active" id="credito">
         <div class="row">
           <div class="col-xs-12">
             <h3>Crédito de nómina</h3>
             <p>Dispones de una cantidad de dinero a un plazo establecido. Se dirige y brinda a los empleados que reciben el pago de su salario. El trabajo y la antigüedad que tengas respaldan el crédito.</p>
           </div>
         </div>
         <div class="row tab-info">
           <div class="col-xs-12 col-sm-6">
             <h3>Ventajas</h3>

             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Préstamos en menos de 24 horas, sin necesidad de aval ni garantía</p>
               </div>
             </div>
             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Comodidad: no es necesario que vayas a nuestras sucursales, lo tramitamos en tu lugar de trabajo</p>
               </div>
             </div>
             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Montos de pagos fijos mensuales, quincenales o semanales</p>
               </div>
             </div>
             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Usa tu crédito en el sueño que vayas a cumplir</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-sm-6">
             <h3>Requisitos</h3>

             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Ser persona física de nacionalidad mexicana o extranjera con fm2</p>
               </div>
             </div>

             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Tener entre 18 y 80 años de edad</p>
               </div>
             </div>

             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Ingreso neto mínimo de $2,000 si eres empleado, o de $1,500 si eres pensionado</p>
               </div>
             </div>

             <div class="media">
               <div class="media-left">
                 <a href="#">
                   <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                 </a>
               </div>
               <div class="media-body">
                 <p>Llenar y firmar solicitud</p>
               </div>
             </div>

           </div>
         </div>
       </div>
       <div role="tabpanel" class="tab-pane" id="anticipo">

        <div class="row">
          <div class="col-xs-12">
            <h3>Anticipo de nómina</h3>
            <p>Adelanta tu nómina para cualquier imprevisto</p>
          </div>
        </div>
        <div class="row tab-info">
          <div class="col-xs-12 col-sm-6">
            <h3>Ventajas</h3>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Adelantos el mismo día, sin necesidad de aval ni garantía</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Comodidad: no es necesario que vayas a nuestras sucursales, lo tramitamos en tu lugar de trabajo</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Pago en el momento de tu siguiente nómina</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Usa tu crédito en el sueño que vayas a cumplir</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <h3>Requisitos</h3>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Ser persona física de nacionalidad mexicana o extranjera con fm2</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Tener entre 18 y 80 años de edad</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Ingreso neto mínimo de $2,000</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Llenar y firmar solicitud</p>
              </div>
            </div>

          </div>
        </div>

       </div>
       <div role="tabpanel" class="tab-pane" id="consumo">

        <div class="row">
          <div class="col-xs-12">
            <h3>Crédito al consumo</h3>
            <p>Es la disposición de una cantidad de dinero con un límite específico a un plazo establecido.</p>
          </div>
        </div>
        <div class="row tab-info">
          <div class="col-xs-12 col-sm-6">
            <h3>Ventajas</h3>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Préstamos en menos de 24 horas</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>No es necesario que vayas a nuestras sucursales, lo tramitamos en tu lugar de trabajo</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Montos de pago fijos mensuales, quincenales o semanales</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Usa tu crédito en el sueño que vayas a cumplir</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <h3>Requisitos</h3>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Ser persona física de nacionalidad mexicana o extranjera con fm2</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Tener entre 18 y 80 años de edad</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Ingreso neto mínimo de $2,000 si eres empleado, o de $1,500 si eres pensionado</p>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="{{ url('assets/img/elements/sq-check.png') }}" class="img-responsive">
                </a>
              </div>
              <div class="media-body">
                <p>Llenar y firmar solicitud</p>
              </div>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <p>* <small>El avalista, obligado solidario o coacreditado responderá como obligado principal por el total del pago frente a la entidad financiera</small></p>
          </div>
        </div>

       </div>
    </div>

    <div class="row docs">
     <div class="col-xs-12">
       <h3>Documentos Requeridos</h3>
       <p>Para cualquier trámite es necesario presentar los siguientes:</p>
     </div>
    </div>
    <div class="row icons">
      <div class="col-sm-3">
        <div class="img-wrapper">
          <img src="{{ url('assets/img/elements/money-bg.png') }}" class="img-responsive">
        </div>
        <p>Contar con ingresos mensuales mínimos de $2,000</p>
      </div>
      <div class="col-sm-3">
        <div class="img-wrapper">
          <img src="{{ url('assets/img/elements/domicilio-bg.png') }}" class="img-responsive">
        </div>
        <p>Comprobantes de domicilio a tu nombre<br/><small>(agua, luz, predial, teléfono, estados de cuenta)</small></p>
      </div>
      <div class="col-sm-3">
        <div class="img-wrapper">
          <img src="{{ url('assets/img/elements/comprobantes-bg.png') }}" class="img-responsive">
        </div>
        <p>Comprobantes de ingresos del último mes</p>
      </div>
      <div class="col-sm-3">
        <div class="img-wrapper">
          <img src="{{ url('assets/img/elements/id-bg.png') }}" class="img-responsive">
        </div>
        <p>Identificación oficial y vigente</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <a href="{{ url('/cotiza') }}" class="btn btn-block btn-cotiza">Cotiza tu préstamo</a>
      </div>
    </div>
    <div class="row disclaimer">
      <div class="col-xs-12">
        <p class="text-center">Las modalidades de contratación son a través de: medios electrónicos, vía telefónica o atención personalizada, todo lo que necesitas para aplicar es tu identidad y capacidad económica.</p>
      </div>
    </div>

  </div>


@stop

@section('js')

@stop
