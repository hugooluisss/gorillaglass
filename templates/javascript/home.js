$(document).ready(function(){
	var carrito = new TCarrito;
	$(".addProducto").click(function(){
		$("#modal-car").fadeIn("slow");
		$("#tblCarrito").DataTable({
			"ordering": false
		});
		
		var tipos = new Array("color", "variacion", "size", "surface");
		
		getHijos(0, $(".addProducto").attr("identificador"));
		listaPedidos();
		
		function getHijos(index, item){
			carrito.getChildrens({
				"identificador": item,
				"index": index,
				after: function(html){
					var contenedor = $("#" + tipos[index]);
					contenedor.find(".dropdown-menu").html(html);
					contenedor.find("[data-toggle=dropdown]:first-child").html("SELECT");
					
					contenedor.find(".dropdown-menu").find("a").click(function(){
						var el = jQuery.parseJSON($(this).attr("datos"));
						console.log(el);
						getHijos(el.index, el.idProducto);
						contenedor.find("[data-toggle=dropdown]:first-child").html(el.nombre2);
						contenedor.find(".btn-group").removeClass("open");
						contenedor.find("[data-toggle=dropdown]:first-child").attr("producto", el.idProducto);
						contenedor.find("[data-toggle=dropdown]:first-child").attr("datos", $(this).attr("datos"));
						
						for(var cont = index+1 ; cont < 4 ; cont++){
							$("#" + tipos[cont]).find(".dropdown-menu").html("");
							$("#" + tipos[cont]).find("[data-toggle=dropdown]:first-child").html("SELECT");
							$("#" + tipos[cont]).find("[data-toggle=dropdown]:first-child").attr("producto", "");
							$("#" + tipos[cont]).find("[data-toggle=dropdown]:first-child").attr("datos", "");
						}
						return false;
					});
				}
			});
		}
		
	    return false;
	});
	
	$("#lnkCerrar").click(function(){
		$("#modal-car").fadeOut("slow");
		
		return false;
	});
	
	$("#modal-car").find(".btn-addProducto").click(function(){
		var producto = $("#surface").find("[data-toggle=dropdown]:first-child").attr("producto");
		if (producto === undefined || producto == null || producto == ''){
			alert("Select surface treatment");
		}else{
			if($("#idPedido").val() == ''){
				var pedido = new TPedido;
				var f = new Date();
				pedido.guardar("", $("#cliente").val(), f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate(), {
					after: function(resp){
						$("#idPedido").val(resp.id);
						addProducto();
					}
				});
			}else if($("#txtCantidad").val() > 0)
				addProducto();
			else{
				alert("Indicates an amount");
				$("#txtCantidad").select();
			}
		}
	});
	
	function listaPedidos(){
		carrito.getProductos({
			"idPedido": $("#idPedido").val(),
			after: function(resp){
				$("#modal-car").find(".table-responsive").html(resp);
			}
		});
	}
	
	function addProducto(){
		var el = jQuery.parseJSON($("#surface").find("[data-toggle=dropdown]:first-child").attr("datos"));
		var obj = new TPedido;
		obj.addMovimiento("", $("#idPedido").val(), el.clave, el.nombre, $("#txtCantidad").val(), el.precio, el.descuento, {
			after: function(resp){
				if (resp.band){
					listaPedidos();
				}else{
					alert("No se pudo agregar el producto");
				}
			}
		});
	}
	
	
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
});