$(document).ready(function(){
	var carrito = new TCarrito();
	listaPedidos();
	
	$("#print").click(function(){
		var el = $(this);
		
		el.prop("disabled", true);
		
		$.post("cpedidos", {
				"pedido": $("#idPedido").val(),
				"action": "imprimir"
			},function(data){
				el.prop("disabled", false);
				if (data.documento != ''){
					if (ventanaPedido === undefined)
						var ventanaPedido = window.open(data.documento, '_blank');
					else
						ventanaPedido.document.href = data.documento;
						
					ventanaPedido.focus();
				}else
					alert("El documento no se pudo generar");
			}, "json");
	});
	
	function listaPedidos(){
		carrito.getProductos({
			"idPedido": $("#idPedido").val(),
			after: function(resp){
				$(".table-responsive").html(resp);
				
				$(".btn-delete").click(function(){
					if ($("#tblCarrito").find("[type=checkbox]:checked").length > 0){
						if(confirm("¿Seguro?")){
							var codigos = "";
							$("#tblCarrito").find("[type=checkbox]:checked").each(function(){
								codigos += $(this).val() + ",";
							});
							
							var obj = new TPedido;
							obj.delMovimiento(codigos, {
								before: function(){
									$(".btn-delete").prop("dissabled", true);
								}, after: function(resp){
									$(".btn-delete").prop("dissabled", false);
									
									if(!resp.band)
										alert("Ocurrieron errores al borrar los elementos");
									
									listaPedidos();
								}
							});
						}
					}
				});
			}
		});
	}
	
	$(".table-responsive").css("height", $(window).height() * 40 / 100);
});