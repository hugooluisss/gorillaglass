TPedido = function(){
	var self = this;
	
	this.guardar = function(id, cliente, fecha, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cpedidos', {
				"action": "guardar",
				"id": id,
				"cliente": cliente,
				"fecha": fecha
			}, function(data) {
				if (data.band == false)
					console.log(data.mensaje == ''?"Upps. Ocurrió un error al agregar la venta":data.mensaje);
				
				if (fn.after !== undefined) fn.after(data);
			}, "json"
		);
	};
	
	this.addMovimiento = function(id, venta, clave, descripcion, cantidad, precio, descuento, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cventas', {
				"action": "addMovimiento",
				"id": id,
				"venta": venta,
				"clave": clave,
				"descripcion": descripcion,
				"cantidad": cantidad,
				"precio": precio,
				"descuento": descuento
			}, function(data) {
				if (data.band == 'false')
					console.log(data.mensaje == ''?"Upps. Ocurrió un error al agregar el movimiento a la venta":data.mensaje);
				
				if (fn.after !== undefined) fn.after(data);
			}, "json"
		);
	};
	
	this.del = function(venta, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cventas', {
			"action": "del",
			"id": venta,
		}, function(data){
			if (data.band == 'false')
				console.log("Ocurrió un error al eliminar la venta");
			
			if (fn.after !== undefined) fn.after(data);
		}, "json");
	};
	
	this.delMovimiento = function(movimiento, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cventas', {
			"action": "delMovimiento",
			"id": movimiento,
		}, function(data){
			if (data.band == 'false')
				console.log("Ocurrió un error al eliminar el artículo");
			
			if (fn.after !== undefined) fn.after(data);
		}, "json");
	};
};