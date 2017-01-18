$(document).ready(function(){
	$(".generarListaPrecios").click(function(){
		var valor = $(".generarListaPrecios").val();
		if (valor < 1 || valor == '')
			alert("Indica un valor mayor a 0");
		else{
			alert("Ok");
		}
	});
});