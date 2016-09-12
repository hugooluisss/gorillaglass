$(document).ready(function(){
	getLista();
	
	$("#winProductos").on('shown.bs.modal', function(){
		$("#winProductos").find("#txtClave").focus();
	});
	
	$("#winProductos").on('hide.bs.modal', function(){
		$("#winProductos").find("form").get(0).reset();
		
		$("#winProductos").find("#id").val("");
		$("#winProductos").find("#padre").val("");
	});
	
	$("#frmProducto").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtClave: {
				required: true
			},
			txtPrecio: {
				required: true,
				number: true
			}
		},
		messages:{
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TProducto;
			form = $(form);
			obj.add(
				form.find("#id").val(), 
				form.find("#padre").val(), 
				form.find("#txtClave").val(),
				form.find("#txtNombre").val(),
				form.find("#txtPrecio").val(),
				{
					before: function(){
						form.find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						form.find("[type=submit]").prop("disabled", false);
						
						if (resp.band){
							getLista();
							$("#winProductos").modal("hide");
						}else
							alert("Ocurrió un error");
					}
				}
			);
		}
	});
	
	
		
	function getLista(){
		$.get("listaProductos", function( data ) {
			$("#dvLista").html(data);
			
			$('#productos').treegrid({
				expanderExpandedClass: 'fa fa-minus',
				expanderCollapsedClass: 'fa fa-plus'
			});
			
			$("#productos").find("[action=agregar]").click(function(){
				padre = 0;
				try{
					var el = jQuery.parseJSON($(this).attr("datos"));
					padre = el.idProducto;
				}catch(err){
					padre = 0;
				}
				
				$("#winProductos").find("#padre").val(padre);
				$("#winProductos").modal();
			});
			
			$("#productos").find("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				var form = $("#frmProducto");
				
				form.find("#id").val(el.idProducto); 
				form.find("#padre").val(el.idPadre);
				form.find("#txtClave").val(el.clave);
				form.find("#txtNombre").val(el.nombre);
				form.find("#txtPrecio").val(el.precio);
				
				$("#winProductos").find("#padre").val(padre);
				$("#winProductos").modal();
			});
			
			$("#productos").find("[action=eliminar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				var obj = new TProducto;
				obj.del(el.idProducto, {
					before: function(){
						$(this).prop("disabled", true);
					}, after: function(resp){
						$(this).prop("disabled", false);
						
						if (resp.band)
							getLista();
						else
							alert("No se pudo eliminar el elemento");
					}
				});
			});
		});
	}
});