
<div class="container-fluid footer-top">
	<div class="row">
		<div class="col-xs-12 col-sm-9">
			<div class="row">
				<div class="col-xs-12 no-left-padding">
					<nav class="navbar navbar-default hidden-xs" id="footer-menu">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						  </button>
						</div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav navbar-left">
					        <li class="footer-nav-1 {{ Request::is('quienes-somos') ? 'active' : '' }}"><a href="{{ url('/quienes-somos') }}" class="js-scroll">Quiénes Somos</a></li>
					        <li class="footer-nav {{ Request::is('nuestros-servicios') ? 'active' : '' }}"><a href="{{ url('/nuestros-servicios') }}">Nuestros Servicios</a></li>
					        <li class="footer-nav {{ Request::is('faq') ? 'active' : '' }}"><a href="{{ url('/faq') }}">FAQ</a></li>
					        <li class="footer-nav {{ Request::is('contacto') ? 'active' : '' }}"><a href="{{ url('/
					        contacto') }}">Contacto</a></li>
					        <li class="footer-nav {{ Request::is('cotiza') ? 'active' : '' }}"><a href="{{ url('/cotiza') }}">Cotiza tu préstamo</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="row copyright">
				<div class="col-xs-12 col-sm-6 col-md-4 copy">
					<p>©2015 Credifort S.A. de C.V. SOFOM ENR<br/> Todos los derechos reservados.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<p><a href="{{ url('aviso-de-privacidad') }}">Avisos de privacidad</a></p>
					{{-- | <a href="{{ url('terminos-y-condiciones') }}">Términos y condiciones de promociones</a> --}}
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 footer-logos">
			<a href="http://www.buro.gob.mx/" target="_blank"><img src="{{ url('assets/img/logos/buro.png') }}" class="img-responsive logo-footer"></a>
			<a href="http://www.condusef.gob.mx/" target="_blank"><img src="{{ url('assets/img/logos/condusef.png') }}" class="img-responsive logo-footer"></a>
		</div>
	</div>
</div>
<div class="container-fluid footer-bottom">
	<div class="row">
		<div class="col-xs-12 col-sm-8 footer-info">
			<p>¿Preguntas? | <a href="mailto:contacto@credifort.com">contacto@credifort.com</a> | <a href="tel:52596300">5259 6300</a></p>
		</div>
		<div class="col-xs-12 col-sm-4 follow">
			<p>Síguenos en: <a href="https://www.facebook.com/credifort" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/credifort" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.linkedin.com/company/10042559?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10042559%2Cidx%3A1-1-1%2CtarId%3A1442850894115%2Ctas%3Acredifort" target="_blank"><i class="fa fa-linkedin"></i></a> <a href="http://dinkbit.com/" target="_blank" class="hvr-float"><img src="https://s3.amazonaws.com/dinkbit/img/firmas/hecho_con_amor_en_dinkbit_blanco.png" class="img-responsive logoDinkbit"></a></p>
		</div>
	</div>
</div>