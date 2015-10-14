<nav class="navbar navbar-default navbar-fixed-top light" id="main-menu">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('assets/img/logos/logo.png') }}" class="img-responsive main-logo" id="main-logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="general hvr-underline-from-center {{ Request::is('quienes-somos') ? 'active' : '' }}"><a href="{{ url('/quienes-somos') }}" class="js-scroll">Quiénes Somos</a></li>
        <li class="general hvr-underline-from-center {{ Request::is('nuestros-servicios') ? 'active' : '' }}"><a href="{{ url('/nuestros-servicios') }}">Nuestros Servicios</a></li>
        <li class="general hvr-underline-from-center {{ Request::is('faq') ? 'active' : '' }}"><a href="{{ url('/faq') }}">FAQ</a></li>
        <li class="general hvr-underline-from-center {{ Request::is('contacto') ? 'active' : '' }}"><a href="{{ url('/contacto') }}">Contacto</a></li>
        <li class="cotiza {{ Request::is('cotiza') ? 'active' : '' }}"><a href="{{ url('/cotiza') }}">Cotiza tu préstamo</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>