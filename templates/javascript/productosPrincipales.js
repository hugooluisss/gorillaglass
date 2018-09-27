$(document).ready(function(){
	getLista();
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtColor: "required",
		},
		wrapper: 'span', 
		messages: {
			txtNombre: "Este campo es necesario",
			txtColor: "Este campo es necesario",
		},
		submitHandler: function(form){
			var obj = new TProductoPrincipal;
			obj.add({
				"id": $("#id").val(), 
				"url": $("#txtURL").val(),
				"posicion": $("#txtPosicion").val(),
				"fn": {
					after: function(datos){
						if (datos.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
							if (datos.id != '' && datos.id != undefined){
								$("#winUpload").find("form").attr("action", "?mod=cproductosprincipales&action=upload&id=" + datos.id);
								$("#winUpload").modal();
							}
						}else{
							alert("Upps... " + datos.mensaje);
						}
					}
				}
			});
        }

    });
		
	function getLista(){
		$.get("?mod=listaProductosPrincipales", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TProductoPrincipal;
					obj.del({
						id: $(this).attr("item"), 
						fn: {
							after: function(data){
								getLista();
							}
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idItem);
				$("#txtURL").val(el.url);
				$("#txtPosicion").val(el.posicion);
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=upload]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winUpload").find("form").attr("action", "?mod=cproductosprincipales&action=upload&id=" + el.idItem);
				$("#winUpload").modal();
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	};
	
	
	$("#winUpload").find("form").fileupload({
		// This function is called when a file is added to the queue
		add: function (e, data) {
	    	
		
			// Automatically upload the file once it is added to the queue
			var jqXHR = data.submit();
		},
		progress: function(e, data){
			var progress = parseInt(data.loaded / data.total * 100, 10);
			
			if(progress == 100){
				//data.context.removeClass('working');
			}
		},
		fail: function(){
			alert("Ocurrió un problema en el servidor, contacta al administrador del sistema");
			
			console.log("Error en el servidor al subir el archivo, checa permisos de la carpeta repositorio");
		}, done: function(e, data){
			var result = jQuery.parseJSON(data.result);
			
			if (result.status == 'success'){
				getLista();
				$("#winUpload").modal("hide");
			}else
				alert("Error al subir el archivo");
		}
	});
});