$(document).ready(function(){
	$("#txtCode").keydown(function(e){
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39))
			return;
		
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
	if ($("#pedido").val() == ''){
		$("#result").show();
		$("#info").hide();
	}else{
		$("#result").hide();
		$("#info").show();
	}
	
	$("#btnSubmit").click(function(){
		if ($("#selCargo").val() == 2 && $("#txtCode").val() == ""){
			alert("Please indicate the 4 last digits of your card");
			$("#txtCode").focus();
		}else{
			$("#btnSubmit").prop("disabled", true);
			
			$.post("cuseradmin", {
				"action": "placeOrder",
				"pedido": $("#pedido").val(),
				"tarjeta": $("#txtCode").val(),
				"cargo": $("#selCargo").val(),
				"comentarios": $("#comentarios").val(),
				"paqueteria": $("#selPaqueteria").val()
			}, function(resp){
				if (!resp.band)
					alert("Your order data could not be registered");
				else{
					$("#btnSubmit").prop("disabled", false);
					
					$("#result").show("slow");
					$("#info").hide("slow");
				}
			}, "json");
		}
	});
});