
function reciba(){

    formatoCorreo = /\w+@+\w+\.+[a-z]/;

	var Nombre = document.getElementById('nombre').value;
    var Apellido = document.getElementById('apellido').value;
    var Correo = document.getElementById('correo').value;
    var DPI = document.getElementById('dpi').value;
    var Direccion = document.getElementById('direccion').value;
    var Grado = document.getElementById('grado').value;


    if (Nombre=="" || Apellido=="" || Correo=="" || DPI=="" || Direccion=="" || Grado=="") {

    	alert('Todos Los Campos Deben Estar Llenos');
    	return false;
    }
    else if (Nombre.length>25){
        alert('El Nombre es demasiado largo');
        return false;
    }
    else if (Apellido.length>25){
        alert('El Apellido es demasiado largo');
        return false;
    }
    else if (Correo.length>35){
        alert('El Correo ingresado es demasiado largo');
        return false;
    }
    else if (DPI.length>15){
        alert('El número de DPI es demasiado largo');
        return false;
    }
    else if (Direccion.length>50){
        alert('La Dirección ingresada es muy larga');
        return false;
    }
    else if (Grado.length>20){
        alert('El Grado ingresado es demasiado largo');
        return false;
    }
    else if (isNaN(DPI)){
        alert('El número de DPI contiene letras');
        return false;
    }
    else if (!formatoCorreo.test(Correo)){
        alert('El Correo no es válido');
        return false;
    }
    
	
}
