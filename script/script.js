function validacionInicio() {

  usuario = document.getElementById("usuario").value;
  contrasena = document.getElementById("contrasena").value;

  if( usuario == null || usuario.length == 0 || /^\s+$/.test(usuario) ) {
      alert('[ERROR] El campo Usuario no debe estar vacio');
      return false;
  }
  if( contrasena == null || contrasena.length == 0 || /^\s+$/.test(contrasena) ) {
      alert('[ERROR] El campo Contraseña no debe estar vacio');
      return false;
  }


  return true;
}

function validacion() {
    nombre = document.getElementById("nombre").value;
    cedula = document.getElementById("cedula").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    celular = document.getElementById("celular").value;
    fecha = document.getElementById("fecha").value;
    usuario = document.getElementById("usuario").value;
    contrasena = document.getElementById("contrasena").value;

    if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ) {
        alert('[ERROR] El campo Nombre no debe estar vacio');
        return false;
    }
    if( apellido == null || apellido.length == 0 || /^\s+$/.test(apellido) ) {
        alert('[ERROR] El campo Apellido no debe estar vacio');
        return false;
    }
     if( fecha == null || fecha.length == 0 || /^\s+$/.test(fecha) ) {
        alert('[ERROR] El campo fecha no debe estar vacio');
        return false;
    }  
    if( celular == null || celular.length == 0 || /^\s+$/.test(celular) ) {
        alert('[ERROR] El campo Celular no debe estar vacio');
        return false;
    }
    if( correo == null || correo.length == 0 || /^\s+$/.test(correo) ) {
        alert('[ERROR] El campo Correo no debe estar vacio');
        return false;
    }
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert('[ERROR] El campo Nombre no debe estar vacio');
        return false;
    }
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert('[ERROR] El campo Nombre no debe estar vacio');
        return false;
    }
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        alert('[ERROR] El campo Nombre no debe estar vacio');
        return false;
    }
    if( isNaN(cedula) ) {
        alert('[ERROR] Solo debe insertar números en Cédula');
      return false;
    }
    if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(correo)) ) {
        alert('[ERROR] Inserte un correo');
        return false;
      }
      if( !(/^\d{10}$/.test(telefono)) && telefono.length > 10 || telefono.length < 10) {
        alert('[ERROR] Debe insertar 10 dígitos en Teléfono sin separarlos');
        return false;
      }
      if( !(/^\d{10}$/.test(celular))  && celular.length > 10 || celular.length < 10) {
        alert('[ERROR] Debe insertar 10 dígitos en Celular sin separarlos');
        return false;
      }
      if( !(/^\d{11}$/.test(cedula))  && cedula.length > 11 || cedula.length < 11) {
        alert('[ERROR] Debe insertar 11 dígitos en Cédula sin separarlos');
        return false;
      }
    return true;
  }

