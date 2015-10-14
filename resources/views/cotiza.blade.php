@extends('layouts.master')
@section('title', 'Cotizador en Línea')
@section('class', 'cotiza')


@section('content')

  <div class="header-cotiza container-fluid" id="section-header">
    <div class="overlay"></div>
    <div class="row">
      <div class="col-xs-12">
      <h2>Cotizador en Línea</h2>
      <p>Somos el mejor prestamista para proporcionar préstamos a plazos y préstamos personales para proporcionar a nuestros clientes una calidad de excelencia, para que puedan seguir adelante con su vida sin preocupaciones.</p>
      </div>
    </div>
  </div>

  <div class="container cotiza-uno">
    <div class="row">
      <div class="col-xs-12">
        <h3>Solicita un prestamo hoy</h3>
        <p>Préstamos en menos de 24 horas, sin necesidad de aval ni garantía.</p>
        <p>Con sólo unos clicks podrás saber cuánto costará tu préstamo. Es fácil y muy rápido.</p>
      </div>
    </div>
  </div>
  <div class="container cotiza-dos">
    <div class="row">
      <div class="col-md-5 col-lg-6">
        <h4>Rápido y conveniente</h4>
        <p>Con nuestro depósito instantáneo, el dinero puede estar en tu cuenta en cuestión de horas.</p><br/>
        <h4>Decimos "si"</h4>
        <p>Aprobamos desde personas que nunca han tenido créditos hasta personas que el banco ya no les brinda créditos.</p>
        <p>Nuestro objetivo es ayudarles a aprender más sobre la forma de mejorar sus calificaciones de crédito.</p><br/>
        <h4>Para nuestros prestatarios</h4>
        <p>Todos nuestros clientes pueden tener acceso a préstamos más grandes a precios más bajos a través del tiempo.</p>
      </div>
      <div class="col-md-7 col-lg-6 cotizador">
      <form id="cotizaForm" method="POST" action="">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="row">
          <div class="col-xs-12">
            <p class="border-bottom">Arrastre los botones de abajo para el monto que desea pedir prestado y en cuantas quincenas</p>
            <label for="monto">Monto</label><br/>
            <input id="monto" data-slider-id='monto' type="text" data-slider-min="5000" data-slider-max="100000" data-slider-step="5000" data-slider-value="15000" data-slider-handle="custom" name="monto" />
            <p><span class="pull-left">$5,000</span><span class="pull-right">$100,000</span></p><br/><br/>
            <label for="quincenas">Quincenas</label><br/>
            <input id="quincenas" data-slider-id='quincenas' type="text" data-slider-min="8" data-slider-max="48" data-slider-step="2" data-slider-value="18" data-slider-handle="custom" name="quincenas" />
            <p><span class="pull-left">8</span><span class="pull-right">48</span></p>
          </div>
        </div>
        <div class="row resultados">
          <div class="col-xs-12">
            <div class="row">
              <div class="col-xs-4">
                <h4>Monto</h4>
                <p class="txt-blue">$ <span id="monto-html">15,000</span></p>
              </div>
              <div class="col-xs-4">
                <h4>Quincenas</h4>
                <p class="txt-blue" id="quincenas-html">18</p>
              </div>
              <div class="col-xs-4">
                <h4>Pagos</h4>
                <p class="txt-blue">$ <span id="pagos-html">1,105</span></p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <a class="btn-cotiza btn btn-block" data-toggle="modal" data-target="#result">Obtenga su dinero ahora</a>

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" class="amort btn btn-block" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Ver tabla de amortización
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        <table class="table table-condensed table-striped">
                          <tr>
                            <th>No. de Pago</th>
                            <th>Saldo Insoluto</th>
                            <th>Amortización</th>
                            <th>Interés</th>
                            <th>IVA</th>
                            <th>Pago</th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>5,000.00</td>
                            <td>542.09</td>
                            <td>173.65</td>
                            <td>27.78</td>
                            <td>743.52</td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>4,457.91</td>
                            <td>563.93</td>
                            <td>154.82</td>
                            <td>24.77</td>
                            <td>743.52</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
  <div class="container cotiza-tres">
    <div class="row">
      <div class="col-xs-12">

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check-xs.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Tasa de interés fija <span class="txt-blue tasa">2.5%</span></p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check-xs.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Los datos presentados son de carácter informativo y no constituyen obligación u ofrecimiento formal por parte de CREDITOS FORTALEZA, S.A. DE C.V. SOFOM, E.N.R., en el otorgamiento del crédito.</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check-xs.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>CAT  <span class="txt-blue cat">23%</span>, sin IVA. Comisión por apertura equivalente al 1% del importe del crédito; sin IVA. Informativo. Fecha de cálculo <span class="txt-blue">01/10/2015</span></p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check-xs.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Incumplir tus obligaciones te puede generar comisiones e intereses moratorios.</p>
          </div>
        </div>

        <div class="media">
          <div class="media-left">
            <a href="#">
              <img class="media-object" src="{{ url('assets/img/elements/sq-check-xs.png') }}" class="img-responsive">
            </a>
          </div>
          <div class="media-body">
            <p>Contratar créditos que excedan tu capacidad de pago afecta tu historial crediticio.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog bran" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="row topmargin-sm">
              <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <p>Envíe su solicitud en línea por cualquier razón préstamo sin importar el tipo de crédito.</p>
                <div id="response" class="alert" role="alert" style="display: none;"></div>
                <form id="resultForm" method="POST" action="{{ url('solicitud') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input type="hidden" name="monto" value="" id="montoRes">
                  <input type="hidden" name="quincenas" value="" id="quincenasRes">
                  <div class="form-group">
                    <input type="text" class="form-control bg-form" name="nameRes" id="nameRes" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control bg-form" name="lastnameRes" id="lastnameRes" placeholder="Apellidos">
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control bg-form" name="telRes" id="telRes" placeholder="Teléfono casa o celular">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control bg-form" name="emailRes" id="emailRes" placeholder="Correo electrónico">
                  </div>
                  <button type="submit" class="btn btn-block btn-res">Enviar</button>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>


@stop

@section('js')
<script type="text/javascript">
  $("#monto").slider({
    tooltip: 'always'
  });

  function createQuincenasSlider() {
    $("#quincenas").slider({
      tooltip: 'always'
    });
  }

  var time;

  //**** Demo para obtener tabla de cotización
  $('input#monto').change(function(e){

    loadingQuoteValues();

    clearTimeout(time);
    time = setTimeout(function(){
      getCotizacion(getQuoteValues());
    }, 500);

  });

  function onQuincenasChage() {
    $('input#quincenas').change(function(e){

      loadingQuoteValues();

      clearTimeout(time);
      time = setTimeout(function(){
        getCotizacion(getQuoteValues());
      }, 500);

    });
  }

  function getQuoteValues() {
    var values = new Array();

    values['monto'] = $('input#monto').val();
    values['quincenas'] = $('input#quincenas').val();

    var non_valid_quincenas_low = ["26", "28", "30", "32", "34"];
    var non_valid_quincenas_high = ["38", "40", "42", "44", "46"];

    if(non_valid_quincenas_low.indexOf(values['quincenas']) != -1) {
      values['quincenas'] = "36";
      fixQuincenasValue(values['quincenas']);
    }

    if(non_valid_quincenas_high.indexOf(values['quincenas']) != -1) {
      values['quincenas'] = "48";
      fixQuincenasValue(values['quincenas']);
    }

    return values;
  }

  function fixQuincenasValue(value) {
    var $input = $('input#quincenas');

    $input.slider('destroy');

    $input.val(value);
    $input.attr('value', value);
    $input.attr('data-value', value);
    $input.attr('data-slider-value', value);

    createQuincenasSlider();

    onQuincenasChage();
  }

  function loadingQuoteValues() {
    $('#collapseOne .panel-body').html('<i class="fa fa-spinner fa-pulse"></i>');
    $('#monto-html').html('<i class="fa fa-spinner fa-pulse"></i>');
    $('#quincenas-html').html('<i class="fa fa-spinner fa-pulse"></i>');
    $('#pagos-html').html('<i class="fa fa-spinner fa-pulse"></i>');
  }

  function getCotizacion(values) {

    loadingQuoteValues();

    $.ajax({
      type: 'POST',
      url: base_url + '/cotizacion',
      data: {
        _token: "{{ csrf_token() }}",
        monto: values['monto'],
        quincenas: values['quincenas']
      },
      success: function(data) {
        console.log(data);

        if(typeof(data.status) !== 'undefined' && data.status == 'error') {
          alert(data.message);
          return;
        }

        $('#collapseOne .panel-body').html(data.html);

        $('#monto-html').html(data.monto);
        $('#montoRes').val(values['monto']);

        $('#quincenas-html').html(data.quincenas);
        $('#quincenasRes').val(values['quincenas']);

        $('#pagos-html').html(data.pago_quincenal);

        $('.cat').html(data.cat);
        $('.tasa').html(data.tasa_interes_anual);
      }
    });
  }

  createQuincenasSlider();
  onQuincenasChage();
  getCotizacion(getQuoteValues());
  //**** Fin Demo para obtener tabla de cotización

</script>
@stop
