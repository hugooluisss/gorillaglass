$(document).ready(function(){
	getLista();
	$("#frmAdd #txtFecha").datepicker( "option", "dateFormat", "yyyy-mm-dd" );
	$("#frmAddPago #txtFecha").datepicker( "option", "dateFormat", "yyyy-mm-dd" );
	
	$('.nav a[href="#add"]').click(function(){
		$("#frmAdd")[0].reset();
		$("#frmAddProductos")[0].reset();
		$("#frmAdd #id").val("");
		showDetalle();
	});
	
	showDetalle();
	
	$("#btnBuscarClientes").click(function(){
		$("#winClientes").modal();
		
		$.get("clientesPedido", function(html){
			$("#winClientes .modal-body").html(html);
			
			$("#winClientes #tblClientes button[action=seleccionar]").click(function(){
				var el =  jQuery.parseJSON($(this).attr("cliente"));
				
				$("#txtCliente").val(el.nombre);
				$("#txtCliente").attr("idCliente", el.idCliente);
				$("#winClientes").modal("hide");
			});
			
			$("#tblClientes").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": true
			});
		});
	});
	
	
	$("#btnBuscarProductos").click(function(){
		$("#winProductos").modal();
		
		$("#winProductos .modal-body").html("Estamos actualizando la lista, por favor espere...");
		
		$.get("productosPedido", function(html){
			$("#winProductos .modal-body").html(html);
			
			$("#winProductos #tblProductos button[action=seleccionar]").click(function(){
				var el =  jQuery.parseJSON($(this).attr("producto"));
				
				$("#frmAddProductos #txtClave").val(el.clave);
				$("#frmAddProductos #txtDescripcion").val(el.nombre);
				$("#frmAddProductos #txtPrecio").val(el.precio);
				$("#frmAddProductos #txtCantidad").val(1);
				$("#winProductos").modal("hide");
				
				$("#frmAddProductos #txtPrecio").focus();
			});
			
			$("#tblProductos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": true
			});
		});
	});
	
	$("#frmAdd").validate({
		debug: false,
		rules: {
			txtFecha: "required",
			txtCliente: "required"
		},
		errorElement : 'span',
		errorLabelContainer: '.errorTxt',
		submitHandler: function(form){
			var obj = new TPedido;
			obj.guardar(
				$("#id").val(), 
				$("#txtCliente").attr("idCliente"), 
				$("#txtFecha").val(),
				{
					before: function(){
						$("#frmAdd").prop("disabled", true);
					},
					after: function(datos){
						$("#frmAdd").prop("disabled", false);
						
						if (datos.band){
							alert("Listo... puedes ingresar los artículos vendidos");
							$("#frmAdd #id").val(datos.id);
							showDetalle();
							getLista();
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
    
    
    $("#frmAddProductos").validate({
		debug: false,
		rules: {
			txtDescripcion: "required",
			txtCantidad: {
				required: true,
				digits: true,
				min: 1
			},
			txtPrecio: {
				required: true,
				number: true,
				min: 1
			}
		},
		errorElement : 'span',
		errorLabelContainer: '.errorTxt',
		submitHandler: function(form){
			var obj = new TVenta;
			obj.addMovimiento(
				"",
				$("#id").val(), 
				$("#txtClave").val(), 
				$("#txtDescripcion").val(),
				$("#txtCantidad").val(),
				$("#txtPrecio").val(),
				$("#txtDescuento").val(),
				{
					before: function(){
						$("#frmAddProductos").prop("disabled", true);
					},
					after: function(datos){
						$("#frmAddProductos").prop("disabled", false);
						
						if (datos.band){
							getListaMovimientos();
							$("#frmAddProductos")[0].reset();
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
    
	function getLista(){
		$("#dvLista").html("Estamos actualizando la lista de clientes, por favor espere...");
		$.get("listaVentas", function(html){
			$("#dvLista").html(html);
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#frmAdd #id").val(el.idVenta);
				$("#frmAdd #txtCliente").val(el.nombre);
				$("#frmAdd #txtCliente").attr("idCliente", el.idCliente);
				$("#frmAdd #selPagos").val(el.pagos);
				$("#frmAdd #txtFecha").val(el.fecha);
				
				showDetalle();
				
				$('.nav a[href="#add"]').tab('show');
			});
			
			$("#dvLista [action=pagos]").click(function(){
				$("#winPagos").modal();
				$("#winPagos #venta").val($(this).attr("venta"));
				listaPagos($(this).attr("venta"));
			});
			
			$("#dvLista .entregados").change(function(){
				var el = $(this);
				var venta = new TVenta;
				
				venta.changeEntregado(el.attr("venta"), el.val(), {
					before: function(){
						el.prop("disabled", true);
					},
					after: function(resp){
						el.prop("disabled", false);
						
						if (resp.band == "false")
							alert("No se pudo actualizar el estado del pedido");
					}
				});
			});
			
			$("#dvLista [action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TVenta ;
					obj.del($(this).attr("venta"), {
						after: function(data){
							if (data.band == false)
								alert("Ocurrió un error al eliminar la venta");
							getLista();
						}
					});
				}
			});
			
			$("#tblPedidos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": true,
				"order": [[ 0, "desc" ]]
			});
		});
	}
	
	function showDetalle(){
		if($("#frmAdd #id").val() == ''){
			$("#frmAddProductos").hide();
			$("#frmAddProductos").hide();
			$("#lstMovimiento").hide();
		}else{
			$("#frmAddProductos").show();
			$("#lstMovimiento").show();
			getListaMovimientos();
		}
	}
	
	
	function getListaMovimientos(){
		$.post("listaMovimientosVenta", {"venta": $("#frmAdd #id").val()}, function(html){
			$("#lstMovimiento").html(html);
			
			$("#lstMovimiento [action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TVenta;
					obj.delMovimiento($(this).attr("movimiento"), {
						after: function(data){
							if (data.band == false)
								alert("Ocurrió un error al eliminar el artículo");
							getListaMovimientos();
						}
					});
				}
			});
			
			$("#tblMovimientos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": true
			});
		});
		
		getLista();
	}
	
	$("#frmAddPago").validate({
		debug: false,
		rules: {
			txtFecha: "required",
			txtMonto: {
				required: true,
				number: true,
				min: 1,
				max: function(){
					return $("#saldo").val()
				}
			}
		},
		messages: {
			txtMonto: {
				max: "El pago no puede ser mayor que el monto del saldo"
			}
		},
		errorElement : 'span',
		errorLabelContainer: '.errorTxt',
		submitHandler: function(form){
			var obj = new TPago;
			obj.add(
				$("#frmAddPago #id").val(), 
				$("#frmAddPago #venta").val(), 
				$("#frmAddPago #txtFecha").val(),
				$("#frmAddPago #txtMonto").val(),
				{
					before: function(){
						$("#frmAddPago").prop("disabled", true);
					},
					after: function(datos){
						$("#frmAddPago").prop("disabled", false);
						
						if (datos.band){
							listaPagos($("#frmAddPago #venta").val());
							getLista();
							$("#frmAddPago")[0].reset();
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			);
        }

    });
    
    function listaPagos(venta){
	    $.post("listaPagos", {"venta": venta}, function(html){
			$("#winPagos .modal-body #lista").html(html);
			
			$("#txtMonto").val($("#saldo").val());
			
			$("[action=eliminarPago]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TPago;
					obj.del($(this).attr("pago"), {
						after: function(data){
							if (data.band == false)
								alert("Ocurrió un error al eliminar el pago");
							else{
								listaPagos(venta);
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=enviarComprobante]").click(function(){
				pago = new TPago;
				var el = $(this);
				
				pago.sendComprobante(el.attr("pago"), {
					before: function(){
						el.prop("disabled", true);
					}, after: function(resp){
						el.prop("disabled", false);
						
						if (resp.band == true)
							alert("El comprobante se envió con éxito");
						else
							alert("Ocurrió un error al enviar el comprobante");
					}
				});
			});
			
			$("#tblPagos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": false,
				"info": true,
				"autoWidth": true
			});
		});
	}
});