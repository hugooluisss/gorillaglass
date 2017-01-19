$(document).ready(function(){
	$(".generarListaPrecios").click(function(){
		var valor = $("#multiplicador").val();
		if (valor < 1 || valor == '')
			alert("Indicates a value greater than 0");
		else{
			$.post("cuserAdmin", {
				"multiplicador": valor,
				"action": "multiplicador",
				"json": 1
			}, function(resp){
				
			}, "json");
		}
	});
});