TProducto = function(){
	var self = this;
	
	this.add = function(id,	padre, clave, nombre, descripcion, precio,fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cproductos', {
				"id": id,
				"padre": padre,
				"clave": clave,
				"nombre": nombre,
				"descripcion": descripcion,
				"precio": precio,
				"action": "add"
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('cproductos', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar");
			}
		}, "json");
	};
	
	this.getImagenes = function(id, fn){
		$.post('cproductos', {
			"id": id,
			"action": "getImagenes"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
		}, "json");
	}
};