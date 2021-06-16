function validacionregistrocliente() {
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
    /*else if () {
      // Si no se cumple la condicion...
      alert('[ERROR] El campo debe tener un valor de...');
      return false;
    }

    else if () {
      // Si no se cumple la condicion...
      alert('[ERROR] El campo debe tener un valor de...');
      return false;
    }*/
  
    // Si el script ha llegado a este punto, todas las condiciones
    // se han cumplido, por lo que se devuelve el valor true
    return true;
  }