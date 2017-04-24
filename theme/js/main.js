$(document).ready(function () {
	// *
	// *
	affixHeader();
	// *
	// if (!!document.querySelector('.global-header')) {
	// 	alert('globalHeader');
	// }

	if (typeof ($('#formLogin')) !== 'undefined' && $('#formLogin') !== null) {
		$('#formLogin').validate({
			debug: false,
			errorClass: 'error',
			errorElement: 'div',
			onkeyup: false,
			rules: {
				emailLogin: {
					required: true,
					email: true
				},
				passwordLogin: {
					required: true,
					minlength: 6
				}
			}
		});

    $('#html').delegate('#linkRecuperarSenha', 'click', function (e) {
      $('#boxLogin, #boxNovaConta').hide(0);
      $('#boxRecuperarSenha').show(0);
      $('#formRecuperarSenha').validate().resetForm();
    });
    $('#html').delegate('.voltarLogin', 'click', function (e) {
      $('#boxRecuperarSenha, #boxRecuperarSenhaMensagem').hide(0);
      $('#boxLogin, #boxNovaConta').show(0);
      $('#formLogin').validate().resetForm();
    });
	}
	if (typeof ($('#formRecuperarSenha')) !== 'undefined' && $(
			'#formRecuperarSenha') !== null) {
		$('#formRecuperarSenha').validate({
			debug: false,
			errorClass: 'error',
			errorElement: 'div',
			onkeyup: false,
			rules: {
				recuperarSenhaEmail: {
					required: true,
					email: true
				}
			}
		});
		$('#formRecuperarSenha').submit(function (e) {
			e.preventDefault();
			if ($(this).valid()) {
				$('#pageRecuperarSenha').hide(0);
				$('#pageRecuperarSenhaMensagem').fadeIn(200);
			} else {
				return false;
			}
		});
	}

	if (!!document.querySelector('#blogMenu')) {
		$('body').on('focus', '#searchBlog', function () {
			$('#blogMenu').addClass('show-search');
		});
		$('body').on('click', '#closeSearchBlog', function () {
			$('#blogMenu').removeClass('show-search');
		});
	}

	if (!!document.querySelector('#downloads')) {
		$('body').on('focus', '#searchDownloads', function () {
			$('#downloads .downloads-header').addClass('show-search');
		});
		$('body').on('click', '#closeSearchDownloads', function () {
			$('#downloads .downloads-header').removeClass('show-search');
		});

		var optDownloads = {
			valueNames: ['name']
		};

		var downloadsList = new List('downloads', optDownloads);
	}

	if (!!document.querySelector('#formComentario')) {
		$('#formComentario').validate({
			debug: false,
			errorClass: "error",
			errorElement: "div",
			onkeyup: false,
			rules: {
				nome: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				sobrenome: {
					required: true
				},
				mensagem: {
					required: true,
					minlength: 10
				}
			},
			messages: {
				nome: {
					required: 'Preencha o campo nome',
					minlength: 'No mínimo 4 letras'
				},
				email: {
					required: 'Informe o seu email',
					email: 'Ops, informe um email válido'
				},
				telefone: {
					required: 'Nos diga seu telefone.'
				},
				mensagem: {
					required: 'Deixe sua mensagem',
					minlength: 'No mínimo 10 letras'
				}
			}
		});
	}
});
