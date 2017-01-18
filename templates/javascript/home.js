$(document).ready(function(){
	var carrito = new TCarrito;
	$(".addProducto").click(function(){
		$("#modal-car").fadeIn("slow", function(){
			$("#txtCantidad").focus();
		});
		$("#tblCarrito").DataTable({
			"ordering": false
		});
		
		getHijos(1, $(".addProducto").attr("identificador"), $(".addProducto").attr("totalEtiquetas"));
		listaPedidos();
		
		function getHijos(index, item, total){
			carrito.getChildrens({
				"identificador": item,
				"index": index,
				"total": total,
				after: function(html){
					var contenedor = $("[nivel=" + index + "]");
					contenedor.find(".dropdown-menu").html(html);
					contenedor.find("[data-toggle=dropdown]:first-child").html("SELECT");
					
					contenedor.find(".dropdown-menu").find("a").click(function(){
						var el = jQuery.parseJSON($(this).attr("datos"));
						
						getHijos(el.index, el.idProducto, $(".addProducto").attr("totalEtiquetas"));
						contenedor.find("[data-toggle=dropdown]:first-child").html(el.nombre2);
						contenedor.find(".btn-group").removeClass("open");
						contenedor.find("[data-toggle=dropdown]:first-child").attr("producto", el.idProducto);
						contenedor.find("[data-toggle=dropdown]:first-child").attr("datos", $(this).attr("datos"));
						
						for(var cont = el.index ; cont < 15 ; cont++){
							$("[nivel=" + cont + "]").find(".dropdown-menu").html("");
							$("[nivel=" + cont + "]").find("[data-toggle=dropdown]:first-child").html("SELECT");
							$("[nivel=" + cont + "]").find("[data-toggle=dropdown]:first-child").attr("producto", "");
							$("[nivel=" + cont + "]").find("[data-toggle=dropdown]:first-child").attr("datos", "");
						}
						
						return false;
					});
				}
			});
		}
		
	    return false;
	});
	
	$("[href=#lnkCerrar]").each(function(i, el){
		$(el).click(function(){
			$("#modal-car").fadeOut("slow");
		});
	});
	
	$("#modal-car").find(".btn-addProducto").click(function(){
		var producto = $("[nivel=" + $(".addProducto").attr("totalEtiquetas") + "]").find("[data-toggle=dropdown]:first-child").attr("producto");
		if (producto === undefined || producto == null || producto == ''){
			alert("Select all options");
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
	
	function addProducto(){
		var el = jQuery.parseJSON($("[nivel=" + $(".addProducto").attr("totalEtiquetas") + "]").find("[data-toggle=dropdown]:first-child").attr("datos"));
		var obj = new TPedido;
		obj.addMovimiento("", $("#idPedido").val(), el.clave, el.nombreAdd, $("#txtCantidad").val(), el.precio, el.descuento, {
			after: function(resp){
				if (resp.band){
					listaPedidos();
				}else{
					alert("No se pudo agregar el producto");
				}
			}
		});
	}
});