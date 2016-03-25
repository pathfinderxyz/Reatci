$('#loginForm').bootstrapValidator({
	 message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 usuario: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre de usuario es requerido'
				 }
			 }
		 },
		 password: {
			 validators: {
				 notEmpty: {
					 message: 'La contraseña es requerida'
				 }
			 }
		 }
	 }
});



$('#registrationForm').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
		 nombre: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre es requerido'
				 }
			 }
		 },
		 cedula: {
			 validators: {
				 notEmpty: {
					 message: 'la cedula es requerida'
				 }
			 }
		 },
		 Telefono: {
			 validators: {
				 notEmpty: {
					 message: 'El Telefono es requerido'
				 }
			 }
		 },
		 email: {
			 validators: {
				 notEmpty: {
					 message: 'El correo es requerido y no puede ser vacio'
				 },
				 emailAddress: {
					 message: 'El correo electronico no es valido'
				 }
			 }
		 },
		 password: {
			 validators: {
				 notEmpty: {
					 message: 'El password es requerido y no puede ser vacio'
				 },
				 stringLength: {
					 min: 8,
					 message: 'El password debe contener al menos 8 caracteres'
				 }
			 }
		 },
		 fecha: {
			 validators: {
				 notEmpty: {
					 message: 'La fecha de nacimiento es requerida y no puede ser vacia'
				 },
				 date: {
					 format: 'DD-MM-YYYY',
					 message: 'La fecha de nacimiento no es valida'
				 }
			 }
		 },
		 opcion: {
			 validators: {
				 notEmpty: {
					 message: 'Debe elegir una opcion'
				 }
			 }
		 },
		 opcion2: {
			 validators: {
				 notEmpty: {
					 message: 'Debe elegir una opcion'
				 }
			 }
		 },
		 Municipio: {
			 validators: {
				 notEmpty: {
					 message: 'El Municipio es requerido y no puede ser vacio'
				 }
			 }
		 },
		 Grupo_familiar: {
			 validators: {
				 notEmpty: {
					 message: 'Debe elegir una opcion'
				 }
			 }
		 },
		 Cond_hab: {
			 validators: {
				 notEmpty: {
					 message: 'Debe elegir una opcion'
				 }
			 }
		 },
		 tipo_vivienda: {
			 validators: {
				 notEmpty: {
					 message: 'Debe elegir una opcion'
				 }
			 }
		 },

		 telefono: {
			 message: 'El teléfono no es valido',
			 validators: {
				 notEmpty: {
					 message: 'El teléfono es requerido y no puede ser vacio'
				 },
				 regexp: {
					 regexp: /^[0-9]+$/,
					 message: 'El teléfono solo puede contener números'
				 }
			 }
		 },
		 Telefono_v: {
			 message: 'El teléfono no es valido',
			 validators: {
				 regexp: {
					 regexp: /^[0-9]+$/,
					 message: 'El teléfono solo puede contener números'
				 }
			 }
		 },
 
	 }
});