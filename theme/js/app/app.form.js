(function() {
  $.extend($.validator.messages, {
    required: "Este campo &eacute; requerido.",
    remote: "Por favor, corrija este campo.",
    email: "Por favor, forne&ccedil;a um endere&ccedil;o eletr&ocirc;nico v&aacute;lido.",
    url: "Por favor, forne&ccedil;a uma URL v&aacute;lida.",
    date: "Por favor, forne&ccedil;a uma data v&aacute;lida.",
    dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
    number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
    digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
    creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
    equalTo: "Por favor, forne&ccedil;a o mesmo valor novamente.",
    accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
    maxlength: jQuery.validator.format("Por favor, forne&ccedil;a n&atilde;o mais que {0} caracteres."),
    minlength: jQuery.validator.format("Por favor, forne&ccedil;a ao menos {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
    range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
    max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
    min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")
  });
  jQuery.validator.addMethod("cep", function(value, element) {
    value = value.replace(/\.|\-/g, '');
    console.debug(value);
    return this.optional(element) || /^[0-9]{8}$/.test(value);
  }, "Por favor, digite um CEP válido");
  /**
   * @Validar Formulário de contato
   */
  //Telefone fixo
  //URL [http://pt.stackoverflow.com/questions/15120/como-validar-n%C3%BAmero-de-telefone-fixo-e-celular-jquery-validator]
  jQuery.validator.addMethod('telefone', function(value, element) {
    value = value.replace("(", "");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '0000000000') {
      return (this.optional(element) || false);
    } else if (value == '00000000000') {
      return (this.optional(element) || false);
    }
    if (["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10"].indexOf(value.substring(0, 2)) !== -1) {
      return (this.optional(element) || false);
    }
    if (value.length < 10 || value.length > 11) {
      return (this.optional(element) || false);
    }
    if (["1", "2", "3", "4", "5"].indexOf(value.substring(2, 3)) == -1) {
      return (this.optional(element) || false);
    }
    return (this.optional(element) || true);
  }, 'Informe um telefone válido');
  //Celular
  jQuery.validator.addMethod('celular', function(value, element) {
    value = value.replace("(", "");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '0000000000') {
      return (this.optional(element) || false);
    } else if (value == '00000000000') {
      return (this.optional(element) || false);
    }
    if (["00", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10"].indexOf(value.substring(0, 2)) !== -1) {
      return (this.optional(element) || false);
    }
    if (value.length < 10 || value.length > 11) {
      return (this.optional(element) || false);
    }
    if (["6", "7", "8", "9"].indexOf(value.substring(2, 3)) == -1) {
      return (this.optional(element) || false);
    }
    return (this.optional(element) || true);
  }, 'Informe um celular válido');
  jQuery.validator.addMethod("cpf", function(value, element) {
    value = jQuery.trim(value);
    value = value.replace('.', '');
    value = value.replace('.', '');
    cpf = value.replace('-', '');
    while (cpf.length < 11) cpf = "0" + cpf;
    var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
    var a = [];
    var b = new Number;
    var c = 11;
    for (i = 0; i < 11; i++) {
      a[i] = cpf.charAt(i);
      if (i < 9) b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) {
      a[9] = 0
    } else {
      a[9] = 11 - x
    }
    b = 0;
    c = 11;
    for (y = 0; y < 10; y++) b += (a[y] * c--);
    if ((x = b % 11) < 2) {
      a[10] = 0;
    } else {
      a[10] = 11 - x;
    }
    var retorno = true;
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) retorno = false;
    return this.optional(element) || retorno;
  }, "Informe um CPF válido");
  if (typeof($('#formContato')) !== 'undefined' && $('#formContato') !== null) {
    $('#formContato').validate({
      debug: false,
      errorClass: "error",
      errorElement: "div",
      onkeyup: false,
      rules: {
        nome: {
          required: true,
          minlength: 4
        },
        email: {
          required: true,
          email: true
        },
        telefone: {
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
  if (typeof($('#cep')) !== 'undefined' && $('#cep') !== null) {
    $("#cep").blur(function() {
      var cep = $(this).val().replace(/\D/g, '');
      if (cep !== "") {
        var validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)) {
          $("#endereco").val("...");
          $("#cidade").val("...");
          $("#bairro").val("...");
          $("#estado").val("...");
          $("#ibge").val("...");
          $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
            if (!("erro" in dados)) {
              $("#endereco").val(dados.logradouro);
              $("#bairro").val(dados.bairro);
              $("#cidade").val(dados.localidade);
              $("#estado").val(dados.uf);
            } else {
              limpa_formulario_cep();
            }
          });
        } else {
          limpa_formulario_cep();
        }
      }
    });
  }
  if (typeof($('.only-number')) !== 'undefined' && $('.only-number') !== null) {
    $(".only-number").keydown(function(e) {
      // Allow: backspace, delete, tab, escape, enter and .
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: Ctrl+C
        (e.keyCode == 67 && e.ctrlKey === true) ||
        // Allow: Ctrl+X
        (e.keyCode == 88 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
      }
    });
  }
  ///////////////////////////////////////////////////////
  // MASKED INPUT PLUGIN
  // a - Represents an alpha character (A-Z,a-z)
  // 9 - Represents a numeric character (0-9)
  // * - Represents an alphanumeric character (A-Z,a-z,0-9)
  //$("#date").mask("99/99/9999", { placeholder: "mm/dd/yyyy"});
  if (typeof($('#cep')) !== 'undefined' && $('#cep') !== null) {
    $("#cep").mask("99.999-999");
  }
  if (typeof($('#data')) !== 'undefined' && $('#data') !== null) {
    $("#data").mask("99/99/9999");
  }
  if (typeof($('#cpf')) !== 'undefined' && $('#cpf') !== null) {
    $("#cpf").mask("999.999.999-99");
  }
  if (typeof($('#cnpj')) !== 'undefined' && $('#cnpj') !== null) {
    $("#cnpj").mask("99.999.999/9999-99");
  }
  // if (typeof($('#rg')) !== 'undefined' && $('#rg') !== null) {
  //   $("#rg").mask("9.999.999");
  // }
  if (typeof($('#telefone')) !== 'undefined' && $('#telefone') !== null) {
    $("#telefone").mask("(99) 9999-99999");
  }
  if (typeof($('#celular')) !== 'undefined' && $('#celular') !== null) {
    $("#celular").mask("(99) 9999-99999");
  }
  if (typeof($('#registroProf')) !== 'undefined' && $('#registroProf') !== null) {
    $("#registroProf").mask("9999999/aa");
  }
}());

function limpa_formulario_cep() {
  $("#endereco").val("");
  $("#bairro").val("");
  $("#cidade").val("");
  $("#estado").val("");
}
