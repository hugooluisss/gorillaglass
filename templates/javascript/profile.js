$(document).ready(function(){
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtTelefono: {
				required : false,
				minlength: 7,
				maxlength: 15,
				number: true
			},
			txtCelular: {
				required : false,
				minlength: 7,
				maxlength: 15,
				number: true
			},
			txtPass: {
				required: true
			}
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtTelefono: "Solo acepta número de entre 7 y 15 dígitos",
			txtCelular: "Solo acepta número de entre 7 y 15 dígitos"
		},
		submitHandler: function(form){
			var obj = new TCliente;
			
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(), 
				$("#txtEmail").val(),
				$("#txtRFC").val(),
				$("#txtDireccion").val(),
				$("#txtRazonSocial").val(),
				$("#txtLocalidad").val(),
				$("#txtTelefono").val(),
				$("#txtCelular").val(),
				$("#txtObservaciones").val(),
				$("#selTipo").val(),
				$("#txtSitio").val(),
				$("#selEstado").val(),
				$("#txtPass").val(),
				{
					before: function(){
						$("#frmAdd").find("[type=submit]").prop("disabled", true);
					},
					after: function(datos){
						$("#frmAdd").find("[type=submit]").prop("disabled", false);
						if (datos.band){
							alert("Gracias por actualizar tu información");
						}else{
							alert("Upps... No se guardaron los datos");
						}
					}
				}
			);
        }

    });
});