$(document).ready(function(e) {
	
	$("input[name=cambia_password]").on("change", function() {
		var password = $(this).closest("form").find("input[name=password]");
		
		if($(this).is(":checked")) {
			password.removeAttr("disabled");
		} else {
			password.attr("disabled", true);	
		}
	});
	
	$("*[name=azione]").on("click", function(e) {
		e.preventDefault();
		$(this).closest("form").find(".has-error").removeClass("has-error");
		
		var azione = $(this).val();
		
		var username_regex = /^[a-zA-Z0-9]{4,}$/
		var password_regex = /^[a-zA-Z0-9]{8,16}$/
		var nome_utente_regex = /^[a-zA-Z0-9 àèéìòù\']{3,}$/
		
		var errore = false;
		
		if(azione != "elimina") {
			var campo_corrente = $(this).closest("form").find("input[name=username]");
			if(campo_corrente.data("required") && !username_regex.test(campo_corrente.val())) {
				errore = true;
				campo_corrente.parent().addClass("has-error");
			}
			
			var cambia_password = $(this).closest("form").find("input[name=cambia_password]");
			
			if(azione == "inserimento" || cambia_password.is(":checked")) {
				campo_corrente = $(this).closest("form").find("input[name=password]");
				if(campo_corrente.data("required") && !password_regex.test(campo_corrente.val())) {
					errore = true;
					campo_corrente.parent().addClass("has-error");
				}
			}
			
			campo_corrente = $(this).closest("form").find("input[name=nome_utente]");
			if(campo_corrente.data("required") && !nome_utente_regex.test(campo_corrente.val())) {
				errore = true;
				campo_corrente.parent().addClass("has-error");
			}
		}
		
		if(errore) {
			alert('La pagina riporta degli errori.\n\nCorreggere i campi evidenziati in rosso.');
			return false;
		} else {
			$(this).off("click").click();
		}		
	});
});