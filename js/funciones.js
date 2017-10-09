function cerrar () { //funcion para cerrar el modal
	bgNegro.classList.remove('verModal');
	modal.classList.remove('verModal');

	if (modal.classList.contains('chico')) {
		modal.classList.remove('chico');
	}else{
		modal.classList.remove('grande');
	}
}

function verModal(tipo, texto, textoBtn, parrafo) { //funcion para agregar el texto, el boton, y la respuesta en el modal
	bgNegro = document.getElementById('bg-negro');
	modal = document.getElementById('modal');

	bgNegro.classList.add('verModal');
	modal.classList.add('verModal');

	if (tipo == 'chico') {
		parrafo = ""
	}else{
		parrafo = parrafo;
	}

	modal.innerHTML="<h1>"+texto+"</h1>"+
		"<p>"+parrafo+"</p>"+
		"<div class='div4'></div>"+
		"<button onclick='cerrar()' class='modalv'>"+textoBtn+"</button>";

	modal.classList.add(tipo);

	tipo = tipo;
}

function accion(x){//funcion que da el border a los divs escogidos
  x.style.borderColor = "#33ad96";
}

function accion1(x){//funcion que da el border a los divs escogidos
  x.style.borderColor = "rgba(169,169,169,.8)";
}

pag = 1; //variable para controlar las paginas de la encuesta
function pagina(valor){ //funcion que hace que cambie de forms
    if(valor=='atras'){
        if(pag == 2){
            document.getElementById('bef').style.display = 'none'
        }
        if(pag == 1){
            boton = document.querySelector('anterior')
            //quitar el onclick de boton
        }else{
            document.getElementById('nt').style.display = 'block';
            formulario = 'forma'+pag;
            document.getElementById(formulario).classList.remove('ver')
            document.getElementById(formulario).classList.add('nover')
            pag = pag - 1;

            formulario = 'forma'+pag;
            document.getElementById(formulario).classList.add('ver')
            document.getElementById(formulario).classList.remove('nover')
        }
    }if(valor=='adelante'){
        if(pag == 16){
            boton = document.querySelector('anterior')
            document.getElementById('nt').style.display = 'none';
            //quitar el onclick de boton
        }else{
            document.getElementById('bef').style.display = 'block';
            formulario = 'forma'+pag;
            document.getElementById(formulario).classList.remove('ver')
            document.getElementById(formulario).classList.add('nover')

            pag = pag + 1;

            formulario = 'forma'+pag;
            document.getElementById(formulario).classList.add('ver')
            document.getElementById(formulario).classList.remove('nover')
        }

    }
}

function presion(id, idFormulario){ //funcion que agrega al localstorage las variables seleccionadas
  turno = id;
  console.log(turno);
  if(document.getElementById(turno).classList.contains('ypres')){
    seleccionada = document.getElementById(turno).classList.remove('ypres');
  }else{//es decir no contine la clase, se agre
    seleccionada = document.getElementById(turno).classList.add('ypres');

		if(sessionStorage.getItem("forma"+idFormulario)){
			datos = sessionStorage.getItem("forma"+idFormulario);
			datos = datos + id + '@';
			sessionStorage.setItem("forma"+idFormulario, datos);
		}else{
			sessionStorage.setItem("forma"+idFormulario, id+"@");
		}
	    //si turno contiene la clse ypres entonces le damos a la varible que sea igual al turno un 1
  }
}

function guardar(form){ //funcion que muestra el modal
    verModal('grande','','Ok', 'Registro exitoso' );
}

function otra(){//funcion que guardara en el localstorage diferentes logros.

}
