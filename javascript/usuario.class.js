TUsuario = function(){
	var self = this;
	
	this.add = function(id,	nombre, apellidos, email, pass, tipo, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cusuarios&action=add', {
				"id": id,
				"nombre": nombre,
				"apellidos": apellidos,
				"email": email, 
				"pass": pass,
				"tipo": tipo
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.savePersonales = function(nombre, apellidos, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cusuarios&action=saveDatosPersonales', {
				"nombre": nombre,
				"app": apellidos
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
	
	this.savePass = function(pass, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('?mod=cusuarios&action=savePassword', {
				"pass": pass
			}, function(data){
				if (data.band == 'false')
					console.log(data.mensaje);
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	}
	
	this.del = function(usuario, fn){
		$.post('?mod=cusuarios&action=del', {
			"usuario": usuario,
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				alert("Ocurrió un error al eliminar al usuario");
			}
		}, "json");
	};
	
	this.login = function(usuario, pass, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('?mod=clogin&action=login', {
			"usuario": usuario,
			"pass": pass
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
};