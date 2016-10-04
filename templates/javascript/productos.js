$(document).ready(function(){
	getLista("");
	
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
				form.find("#txtDescripcion").val(),
				form.find("#txtPrecio").val(),
				{
					before: function(){
						form.find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						form.find("[type=submit]").prop("disabled", false);
						
						if (resp.band){
							getLista(form.find("#id").val() == ''?form.find("#padre").val():form.find("#id").val());
							$("#winProductos").modal("hide");
						}else
							alert("Ocurrió un error");
					}
				}
			);
		}
	});
	
	
		
	function getLista(idProducto){
		$.get("listaProductos", function( data ) {
			$("#dvLista").html(data);
			
			$('#productos').treegrid({
				expanderExpandedClass: 'fa fa-minus',
				expanderCollapsedClass: 'fa fa-plus'
			});
			
			function expandir(el, band = true){
				try{
					if (el.treegrid('isCollapsed')){
						if (el.attr("nivel") != '')
							expandir($(".treegrid-" + el.attr("nivel")), false);
							
						el.treegrid('expand');
					}else
						expandir($(".treegrid-" + el.attr("nivel")), false);
				}catch(err){
					console.log("Error " + el.attr("class"));
				}
			}
			
			console.log(idProducto);
			if(idProducto != ''){
				$(".treegrid-parent-1").treegrid("collapseRecursive");
				expandir($("[producto=" + idProducto +"]"));
			}else
				$(".treegrid-parent-1").treegrid("expandRecursive");
			
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
				form.find("#txtDescripcion").val(el.descripcion);
				form.find("#txtPrecio").val(el.precio);
				
				$("#winProductos").modal();
			});
			
			$("#productos").find("[action=imagen]").click(function(){
				var producto = $(this);
				$("#winUploadImagen").find("form").attr("action", "?mod=cproductos&action=upload&producto=" + producto.attr("identificador"));
				$("#winUploadImagen").find("form").find("#producto").val(producto.attr("identificador"));
				
				getImagenes(producto.attr("identificador"));
				
				$("#winUploadImagen").modal();
			});
			
			
			$("#winUploadImagen").find("form").fileupload({
				// This function is called when a file is added to the queue
				add: function (e, data) {
			    	
				
					// Automatically upload the file once it is added to the queue
					var jqXHR = data.submit();
				},
				progress: function(e, data){
					if(progress == 100){
						data.context.removeClass('working');
						getImagenes($("#winUploadImagen").find("form").find("#producto").val());
					}
				},
				fail: function(){
					alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
					
					console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
				}
			});
			
			$("#productos").find("[action=eliminar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				var producto = $(this);
				
				var obj = new TProducto;
				obj.del(el.idProducto, {
					before: function(){
						$(this).prop("disabled", true);
					}, after: function(resp){
						$(this).prop("disabled", false);
						
						if (resp.band)
							getLista(el.idPadre);
						else
							alert("No se pudo eliminar el elemento");
					}
				});
			});
			
			$("#productos").find("[action=masivo]").click(function(){
				var elemento = jQuery.parseJSON($(this).attr("datos"));
				$("#winMasivo").attr("padre", elemento.idProducto);
				
				$("#winMasivo").modal();
			});
			
			$(".tree2 td:not([noselect])").each(function(){
				var el = $(this);
				el.click(function(){
					$(".tree2 tr").each(function(){
						$(this).removeClass("label-info");
					});
					
					el.parent().addClass("label-info");
				});
			});
			
			$("#productos").find("[action=pegar]").click(function(){
				var producto = $(".tree2 tr.label-info").attr("producto");
				var elemento = jQuery.parseJSON($(this).attr("datos"));
				if (producto == '' || producto == undefined)
					alert("Selecciona un item de la lista para copiar sus hijos");
				else if(producto == elemento.idProducto)
					alert("El producto seleccionado no puede ser copiado en si mismo");
				else{
					if(confirm("¿Seguro de querer clonar a sus hijos?")){
						var obj = new TProducto;
						obj.clonar(producto, elemento.idProducto, {
							before: function(){
								$("#dvLista").html("Por favor espere mientras se realiza el proceso de clonado");
							},
							after: function(resp){
								getLista(elemento.idProducto);
								
								if (resp.band)
									alert("El clonado se realizó con éxito");
								else
									alert("No se completó el clonado");
							}
						});
					}
				}
			});
		});
	}
	
	
	$("#winMasivo").on('show.bs.modal', function(e){
		$("[type=checkbox]").prop("checked", false);
		
		$("#winMasivo").find("botton").prop("disabled", false);
	});
	
	$("#winMasivo").find("button").click(function(){
		var boton = $(this);
		var elementos = {};
		var i = 0;
		switch(boton.attr("tipo")){
			case 'colores':
				$("input.colores:checked").each(function(){
					var el = jQuery.parseJSON($(this).attr("datos"));
					objeto = {};
					objeto['clave'] = el.clave;
					objeto['nombre'] = el.nombre;
					objeto['precio'] = $("#winMasivo").find("#txtPrecio").val();
					elementos[i++] = objeto;
				});
			break;
			case 'texturas':
				$("input.texturas:checked").each(function(){
					var el = jQuery.parseJSON($(this).attr("datos"));
					objeto = {};
					objeto['clave'] = el.clave;
					objeto['nombre'] = el.nombre;
					objeto['precio'] = el.precio;
					elementos[i++] = objeto;
				});
			break;
			case 'tamanos':
				$("input.tamanos:checked").each(function(){
					var el = jQuery.parseJSON($(this).attr("datos"));
					objeto = {};
					objeto['clave'] = el.clave;
					objeto['nombre'] = el.nombre;
					objeto['precio'] = el.precio;
					elementos[i++] = objeto;
				});
			break;
		}
		
		var obj = new TProducto;
		elementos = JSON.stringify(elementos);
		console.log(elementos);
		
		obj.addMasiva($("#winMasivo").attr("padre"), elementos, {
			before: function(){
				boton.prop("disabled", true);
			},
			after: function(resp){
				boton.prop("disabled", false);
				
				if (resp.band){
					$("#winMasivo").modal("hide");
					getLista($("#winMasivo").attr("padre"));
				}else
					alert("Ocurrio un error al actualizar");
			}
		});
		
	});
});

function getImagenes(producto){
	var obj = new TProducto;
	obj.getImagenes(producto, {
		before: function(){
			$('#winUploadImagen .elementos').html("Estamos obteniendo las imágenes del servidor, por favor espere...");
		},
		after: function(data){
			$('#winUploadImagen .elementos').html("");
			$.each(data, function(i, el){
				var tpl = $('<li class="list-group-item">'+
            '<img style="width: 60px; height: 60px" src="repositorio/productos/producto_' + producto + '/' + el +'" />'+'<p></p><span></span><a class="btn btn-primary btn-xs vista">Vista previa</a><a class="btn btn-danger btn-xs eliminar">Eliminar</a></li>' );
	            
			     // Append the file name and file size
			    tpl.find("a.eliminar").click(function(){
			    	if (confirm("¿Seguro?")){
				    	$.post('?mod=cproductos&action=delfile', {
					    	"producto": $("#winUploadImagen form").find("#producto").val(),
					    	"archivo": el
					    }, function(data){
					    	if(data.band)
					    		tpl.remove();
						}, "json");
			    	}
			    });
			    
			    tpl.find("a.vista").click(function(){
			    	url = 'repositorio/productos/producto_' + $("#winUploadImagen form").find("#producto").val() + '/' + el;
			    	
			    	var win = window.open(url, '_blank');
			    	win.focus();
			    });
			
			     // Add the HTML to the UL element
				data.context = tpl.appendTo($('#winUploadImagen .elementos'));
			})
		}
	});
}

function formatFileSize(bytes) {
	if (typeof bytes !== 'number') {
	    return '';
	}
	
	if (bytes >= 1000000000) {
	    return (bytes / 1000000000).toFixed(2) + ' GB';
	}
	
	if (bytes >= 1000000) {
	    return (bytes / 1000000).toFixed(2) + ' MB';
	}
	return (bytes / 1000).toFixed(2) + ' KB';
}