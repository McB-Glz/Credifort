var wW = $(window).width();

function contactFormValidation(){
    $('#contactForm').formValidation({
        framework: 'bootstrap',
        message: 'Por favor introduce la información solicitada.',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu nombre.'
                    }
                }
            },
            apellidos: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tus apellidos.'
                    }
                }
            },
            tel: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu teléfono.'
                    },
                    stringLength: {
                        message: 'Por favor introduce un número válido.',
                        max: 13,
                        min: 8
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu email.'
                    },
                    emailAddress: {
                        message: 'Por favor verifíca tu email.'
                    }
                }
            },
            asunto: {
                validators: {
                    notEmpty: {
                        message: 'Por favor selecciona un asunto.'
                    }
                }
            },
            empresa: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tus empresa.'
                    }
                }
            },
            telOficina: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce el teléfono de oficina.'
                    },
                    stringLength: {
                        message: 'Por favor introduce un número válido.',
                        max: 10,
                        min: 8
                    }
                }
            },
            mensaje: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu mensaje.'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {

      e.preventDefault();

      var $form = $(e.target);

      var $response_container = $('#response');

      $form.find('button').attr('disabled', 'disabled');
      $form.find('button').addClass('disabled');

      var formData = $form.serialize();

      $.ajax({
          type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
          url         : base_url+'/send-email', // the url where we want to POST
          data        : formData, // our data object
          dataType    : 'json', // what type of data do we expect back from the server
          encode      : true
      })
      .done(function(data) {

          if (!$response_container.is(':visible')) {
              $response_container.slideToggle('fast');
          }

          $response_container.html(data.message);

          if (data.status == 'error') {

              $response_container.addClass('alert-danger');

          }else{

              $response_container.addClass('alert-success');

              $form.formValidation('resetForm', true);
          }

          $form.find('button').removeAttr('disabled');
          $form.find('button').removeClass('disabled');

      });
    });
}

function resultFormValidation(){
    $('#resultForm').formValidation({
        framework: 'bootstrap',
        message: 'Por favor introduce la información solicitada.',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nameRes: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu nombre.'
                    }
                }
            },
            lastnameRes: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tus apellidos.'
                    }
                }
            },
            telRes: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu teléfono.'
                    },
                    stringLength: {
                        message: 'Por favor introduce un número válido.',
                        max: 13,
                        min: 8
                    }
                }
            },
            emailRes: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu email.'
                    },
                    emailAddress: {
                        message: 'Por favor verifíca tu email.'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {

      e.preventDefault();

      var $form = $(e.target);

      var $response_container = $('#response');

      $form.find('button').attr('disabled', 'disabled');
      $form.find('button').addClass('disabled');

      var formData = $form.serialize();

      $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : base_url+'/solicitud', // the url where we want to POST
        data        : formData, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
      })
      .done(function(data) {

        if (!$response_container.is(':visible')) {
            $response_container.slideToggle('fast');
        }

        $response_container.html(data.message);

        if (data.status == 'error') {

            $response_container.addClass('alert-danger');

        }else{

            $response_container.addClass('alert-success');

            $form.formValidation('resetForm', true);
        }

        $form.find('button').removeAttr('disabled');
        $form.find('button').removeClass('disabled');

      });
    });
}
$(document).ready(function() {
	if ($('#section-header').length > 0) {

		$(window).scroll(function() {
			if (wW > 767) {
				if ($(this).scrollTop() > 200){
					if ( $('#main-menu').hasClass("light") ) {
						$('#main-menu').removeClass("light");
						$('#main-menu').addClass("dark");
						$('#main-logo').attr({
							src: '../assets/img/logos/logo-dark.png'
						});
					}
				} else if ($(this).scrollTop() < 200) {
					if ( $('#main-menu').hasClass("dark") ) {
						$('#main-menu').removeClass("dark");
						$('#main-menu').addClass("light");
						$('#main-logo').attr({
							src: '../assets/img/logos/logo.png'
						});
					}
				}
			} else if (wW < 767) {
                if ($(this).scrollTop() > 50){
                    if ( $('#main-menu').hasClass("light") ) {
                        $('#main-menu').removeClass("light");
                        $('#main-menu').addClass("dark");
                        $('#main-logo').attr({
                            src: '../assets/img/logos/logo-dark.png'
                        });
                    }
                } else if ($(this).scrollTop() < 50) {
                    if ( $('#main-menu').hasClass("dark") ) {
                        $('#main-menu').removeClass("dark");
                        $('#main-menu').addClass("light");
                        $('#main-logo').attr({
                            src: '../assets/img/logos/logo.png'
                        });
                    }
                }
            }
		});

	} else{

		if ( $('#main-menu').hasClass("light") ) {
			$('#main-menu').removeClass("light");
			$('#main-menu').addClass("dark");
			$('#main-logo').attr({
				src: '../assets/img/logos/logo-dark.png'
			});
		}
	}

	$('.panel').each(function() {
	    $(this).on('show.bs.collapse', function () {
	        $panel = $(this);
	        $collapsed = $('.titulo', $(this).first() );
	        $collapsed.addClass('active');
	    });

	    $(this).on('hide.bs.collapse', function () {
	        $panel = $(this);
	        $collapsed = $('.titulo', $(this).first() );
	        $collapsed.removeClass('active');
	    });
	});

	$('input, textarea').placeholder();

	$('.selectpicker').selectpicker();

	contactFormValidation();
	resultFormValidation();
});


