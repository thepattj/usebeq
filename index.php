<!DOCTYPE html>
<html>
<head>
	<title>Oferta educatica extracurricular</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta name="viewport" content="width=device-width">
	<script src="js/funciones.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <div id="bg-negro" onclick="cerrar()"></div>
	<div id="modal"></div>
	<div class="img-titulo"> <h5>OFERTA EDUCATIVA - USEBEQ</h5></div>
	<div class="contenido">
		<div style="cursor:pointer;" class="anterior" onclick="pagina('atras')">
			<button style="display:none; cursor:pointer;" id="bef"><img src="img/atras.png"></button>
		</div>
		<div class="cuest">
		    <form id="forma1" class="ver" onsubmit="return false">
		        <div class="div12"></div>
		        <div class="div12"><h3>LA OFERTA EDUCATIVA EXTRACURRICULAR DE ESCUELAS SECUNDARIAS DEL ESTADO DE QUERÉTARO<br>CUESTIONARIO PARA DIRECTIVO Y DOCENTES</h3></div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8"><b>PROPÓSITO:</b> Conocer, apreciar y difundir los servicios adicionales que las escuelas ofertan en beneficio de sus alumnos y familias.</div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8"><b>INDICACIONES:</b> Este cuestionario debe ser llenado por el director y dos informantes claves que cuenten con lo solicitado.</div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8"><b>IMPORTANTE:</b> La respuesta a este cuestionario es por turno.</div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8"><b>FECHA LÍMITE:</b> Por la importancia de la información que obtendremos de este cuestionario, se ha decidido ampliar el plazo original de envío al 10 de febrero del presente.</div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8"><b>¡AGRADECEMOS MUCHO LA INFORMACIÓN BRINDADA!</b></div>
                <div class="div12"></div>
                <div class="divespacio"></div><div class="div8">Atentamente Dirección de Evaluación de la Política Educativa de USEBEQ</div>
                <div class="div12"></div>
		    </form>

			<form id="forma2" class="nover" onsubmit="return false">
				<div class="div12"></div>
				<div class="div12"> <h2 id="titprimero">DATOS GENERALES</h2> </div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3">Nombre del centro educativo</div>
					<div class="div3">Clave del centro educativo</div>
					<div class="div3">Turno(s) (presiona los que tengas)</div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="nombre" placeholder="Nombre completo"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="clave" placeholder="** Digitos"></div>
					<div class="div3">
						<div class="div5 check" id="matutino" style="cursor:pointer;" onclick="presion(this.id)">Matutino</div>
						<div class="div6 check" id="vespertino" style="cursor:pointer;" onclick="presion(this.id)">Vespertino</div>
						<div class="div11 check" id="completo" style="cursor:pointer;" onclick="presion(this.id)">Turno Completo</div>
					</div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3">Nombre del responsable</div>
					<div class="div3">Cargo</div>
					<div class="div3">Correo Electronico</div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="nombreres" placeholder="Nombre(s) Apellido Paterno Apellido Materno"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="cargo"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="correo"></div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3">Nombre del informante clave</div>
					<div class="div3">Cargo</div>
					<div class="div3">Correo Electronico</div>
				<div class="div12"></div>
				<div class="divespacio"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="nombre1" placeholder="Nombre(s) Apellido Paterno Apellido Materno"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="cargo2"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="correo"></div>
				<div class="div12"></div>

				<div class="divespacio"></div>
					<div class="div3">Nombre del informante clave</div>
					<div class="div3">Cargo</div>
					<div class="div3">Correo Electronico</div>
				<div class="div12"></div>
				<div class="divespacio"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="nombre1" placeholder="Nombre(s) Apellido Paterno Apellido Materno"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="cargo2"></div>
					<div class="div3"><input onfocus="accion(this)" onblur="accion1(this)" type="text" id="correo"></div>
				<div class="div12"></div>
			</form>

			<form id="forma3" class="nover" onsubmit="return false">
				<div class="div12"> <h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> De manera adicional a la programación curricular, ¿su escuela ofrece otras actividades a los estudiantes?</div>
                <div class="div12"></div>
				<div class="divespacio"></div><div class="div4"></div><div class="div4"><select>
					<option>Sí</option>
					<option>No</option>
					<option>No lo se</option>
				</select></div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div9">¿Cuáles de las siguientes actividades extra-curriculares se realizan en su escuela? oprima las que tenga </div>
				<div class="div12"></div>
				<div class="div12"><h4>DEPORTIVAS</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc"id="atletismo" onclick="presion(this.id)">Atletismo (formación de equipos y/o torneos)</div><div style="cursor:pointer;" class="div5 checkc" id="futbol" onclick="presion(this.id)">Futbol (formación de equipos y/o torneos)</div><div style="cursor:pointer;" class="div5 checkc" id="basquet" onclick="presion(this.id)">Basquetbol (formación de equipos y/o torneos)</div><div style="cursor:pointer;" class="div5 checkc" id="volei" onclick="presion(this.id)">Voleibol (formación de equipos y/o torneos)</div> </div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma4" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles de las siguientes actividades extra-curriculares se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>CULTURALES</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="danza" onclick="presion(this.id)">Danza</div><div style="cursor:pointer;" class="div5 checkc"id="dibujo" onclick="presion(this.id)">Dibujo Artistico</div><div class="div5 checkc"id="teatro" onclick="presion(this.id)">Teatro</div><div style="cursor:pointer;" class="div5 checkc"id="musica" onclick="presion(this.id)">Música</div><div style="cursor:pointer;" class="div5 checkc"id="pintura" onclick="presion(this.id)">Pintura</div><div style="cursor:pointer;" class="div5 checkc"id="lector" onclick="presion(this.id)">Formación de lectores (club, taller, etc.)</div></div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma5" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles de las siguientes actividades extra-curriculares se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"> <h4>RECREATIVAS </h4> </div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="ajedrez" onclick="presion(this.id)">Ajedrez</div><div style="cursor:pointer;" class="div5 checkc" id="arreglos" onclick="presion(this.id)">Arreglos florales</div><div style="cursor:pointer;" class="div5 checkc" id="bisuteria" onclick="presion(this.id)">Bisutería</div><div style="cursor:pointer;" class="div5 checkc" id="bordado" onclick="presion(this.id)">Bordados y tejidos</div><div style="cursor:pointer;" class="div5 checkc" id="jardineria" onclick="presion(this.id)">Jardinería</div><div style="cursor:pointer;" class="div5 checkc" id="cultivo" onclick="presion(this.id)">Cultivo de hortalizas, Huerto escolar</div><div style="cursor:pointer;" class="div5 checkc" id="papiro" onclick="presion(this.id)">Papiroflexia</div><div style="cursor:pointer;" class="div5 checkc" id="grafico" onclick="presion(this.id)">Club de diseño gráfico</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma6" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles de las siguientes actividades extra-curriculares se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"> <h4>CÍVICAS </h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="banda" onclick="presion(this.id)">Banda de guerra</div><div style="cursor:pointer;" class="div5 checkc" id="escolta" onclick="presion(this.id)">Escoltas</div></div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma7" class="nover" onsubmit="return false">
				<div class="div12"> <h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles de las siguientes actividades extra-curriculares se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="divtitulo"> <h4>ACTIVIDADES DE ASISTENCIA ACADÉMICA, PSICOLÓGICA, SOCIAL, FAMILIAR, ECONÓMICA Y/O DE SALUD * </h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="convivencia" onclick="presion(this.id)">Acciones de convivencia escolar</div><div style="cursor:pointer;" class="div5 checkc" id="acompa" onclick="presion(this.id)">Acompañamiento académico para alumnos</div><div style="cursor:pointer;" class="div5 checkc" id="aalum" onclick="presion(this.id)">Apoyo psicológico para alumnos</div><div style="cursor:pointer;" class="div5 checkc" id="apad" onclick="presion(this.id)">Apoyo psicológico para padres de familia</div><div style="cursor:pointer;" class="div5 checkc" id="desayuno" onclick="presion(this.id)">Desayunos económicos</div><div style="cursor:pointer;" class="div5 checkc" id="escpad" onclick="presion(this.id)">Escuela para padres</div><div style="cursor:pointer;" class="div5 checkc" id="muestras" onclick="presion(this.id)">Muestras académicas para padres</div><div style="cursor:pointer;" class="div5 checkc" id="platicas" onclick="presion(this.id)">Pláticas de educación sexual</div><div style="cursor:pointer;" class="div5 checkc" id="transporte" onclick="presion(this.id)">Transporte escolar gratuito</div></div>

				<div class="divespacio"></div> <div class="div2">Otras:</div><div class="div6"><textarea class="renglon" onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma8" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles actividades tecnológicas se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>ADMINISTRATIVAS E INFORMÁTICAS </h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="contable" onclick="presion(this.id)">Administración contable</div><div style="cursor:pointer;" class="div5 checkc" id="compu" onclick="presion(this.id)">Computación</div><div style="cursor:pointer;" class="div5 checkc" id="ofima" onclick="presion(this.id)">Ofimática</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma9" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles actividades tecnológicas se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>INDUSTRIA Y CONSTRUCCIÓN</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="carpinteria" onclick="presion(this.id)">Carpintería e industria de la madera</div><div style="cursor:pointer;" class="div5 checkc" id="climatizacion" onclick="presion(this.id)">Climatización y refrigeración</div><div style="cursor:pointer;" class="div5 checkc" id="confeccion" onclick="presion(this.id)">Confección del vestido e industria textil</div><div style="cursor:pointer;" class="div5 checkc" id="dibujo" onclick="presion(this.id)">Dibujo técnico</div><div style="cursor:pointer;" class="div5 checkc" id="arqui" onclick="presion(this.id)">Diseño arquitectónico</div><div style="cursor:pointer;" class="div5 checkc" id="elec" onclick="presion(this.id)">Diseño de circuitos electrónicos</div></div>
			</form>

			<form id="forma10" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles actividades tecnológicas se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>INDUSTRIA Y CONSTRUCCIÓN</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="estructura" onclick="presion(this.id)">Diseño de estructuras metálicas</div><div style="cursor:pointer;" class="div5 checkc" id="dgrafico" onclick="presion(this.id)">Diseño gráfico</div><div style="cursor:pointer;" class="div5 checkc" id="industrial" onclick="presion(this.id)">Diseño industrial</div><div style="cursor:pointer;" class="div5 checkc" id="ductos" onclick="presion(this.id)">Ductos y controles</div><div style="cursor:pointer;" class="div5 checkc" id="electronica" onclick="presion(this.id)">Electrónica, comunicación y sistemas de control</div></div>
				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma11" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles actividades tecnológicas se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>PREPARACIÓN DE ALIMENTOS Y ACTIVIDADES AGROPECUARIAS </h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="preparacion" onclick="presion(this.id)">Preparación y conserva de alimentos</div><div class="div5 checkc" id="acuicultura" onclick="presion(this.id)">Acuicultura</div><div style="cursor:pointer;" class="div5 checkc" id="agricultura" onclick="presion(this.id)">Agricultura</div><div style="cursor:pointer;" class="div5 checkc" id="apicultura" onclick="presion(this.id)">Apicultura</div><div style="cursor:pointer;" class="div5 checkc" id="silvicultra" onclick="presion(this.id)">Silvicultura</div><div style="cursor:pointer;" class="div5 checkc" id="pecuaria" onclick="presion(this.id)">Pecuarias</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma12" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuáles actividades tecnológicas se realizan en su escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>TURISMO</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="hotelera" onclick="presion(this.id)">Atención hotelera</div><div style="cursor:pointer;" class="div5 checkc" id="turismo" onclick="presion(this.id)">Turismo</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma13" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuál de los siguientes programas se lleva en la escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>PROGRAMA</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones">
						<div style="cursor:pointer;" class="div5 checkc" id="adicciones" onclick="presion(this.id)">Apoyo contra las adicciones</div>
						<div style="cursor:pointer;" class="div5 checkc" id="usaer" onclick="presion(this.id)">Apoyo USAER</div>
						<div style="cursor:pointer;" class="div5 checkc" id="estructura" onclick="presion(this.id)">Becas oficiales (académicas)</div>
						<div style="cursor:pointer;" class="div5 checkc" id="prospera" onclick="presion(this.id)">Becas PROSPERA</div>
						<div style="cursor:pointer;" class="div5 checkc" id="convivencia" onclick="presion(this.id)">Convivencia escolar</div></div>
			</form>

			<form id="forma14" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> ¿Cuál de los siguientes programas se lleva en la escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>PROGRAMA</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="desayunoc" onclick="presion(this.id)">Desayunos en caliente</div><div style="cursor:pointer;" class="div5 checkc" id="desayunof" onclick="presion(this.id)">Desayunos en frío</div><div style="cursor:pointer;" class="div5 checkc" id="equipamiento" onclick="presion(this.id)">Equipamiento y mantenimiento de infraestructura (Escuelas al 100)</div><div style="cursor:pointer;" class="div5 checkc" id="tiempoc" onclick="presion(this.id)">Escuelas de Tiempo Completo</div><div style="cursor:pointer;" class="div5 checkc" id="transportesc" onclick="presion(this.id)">Transporte escolar</div><div style="cursor:pointer;" class="div5 checkc" id="verbien" onclick="presion(this.id)">Ver bien para aprender mejor</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma15" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9">¿Con qué infraestructura destacable cuenta la escuela? márquelas </div>
				<div class="div12"></div>
				<div class="div12"><h4>PROGRAMA</h4> </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="divopciones"><div style="cursor:pointer;" class="div5 checkc" id="arcotecho" onclick="presion(this.id)">Arcotecho</div><div style="cursor:pointer;" class="div5 checkc" id="auditorio" onclick="presion(this.id)">Auditorio</div><div style="cursor:pointer;" class="div5 checkc" id="amedios" onclick="presion(this.id)">Aula de medios</div><div style="cursor:pointer;" class="div5 checkc" id="biblioteca" onclick="presion(this.id)">Biblioteca</div><div style="cursor:pointer;" class="div5 checkc" id="cafeteria" onclick="presion(this.id)">Cafetería</div><div style="cursor:pointer;" class="div5 checkc" id="cbasquet" onclick="presion(this.id)">Cancha de básquetbol, voleibol</div><div style="cursor:pointer;" class="div5 checkc" id="cfutbol" onclick="presion(this.id)">Cancha de fútbol</div><div style="cursor:pointer;" class="div5 checkc" id="cfutbolr" onclick="presion(this.id)">Cancha de fútbol rápido</div><div style="cursor:pointer;" class="div5 checkc" id="laboratorios" onclick="presion(this.id)">Laboratorios</div><div style="cursor:pointer;" class="div5 checkc" id="pcivica" onclick="presion(this.id)">Plaza Cívica</div></div>

				<div class="divespacio"></div><div class="div4">Otras:</div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"><textarea onfocus="accion(this)" onblur="accion1(this)" class="espacio"></textarea></div>
				<div class="div12"></div>
			</form>

			<form id="forma16" class="nover" onsubmit="return false">
				<div class="div12"><h2>CUESTIONARIO</h2> </div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div9"> Enuncie y describa brevemente si su escuela cuenta con apoyos adicionales diferentes a los anteriores.</div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div8"><textarea onfocus="accion(this)" onblur="accion1(this)"></textarea></div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div9">Principales logros que ha tenido su escuela en alguna(s) de la(s) actividad(es) anterior(es). </div>
				<div class="div12"></div>

				<div class="divespacio"></div><div class="div8"><input onfocus="accion(this)" onblur="accion1(this)" type="text" placeholder="Logro"></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div8"><textarea onfocus="accion(this)" onblur="accion1(this)" placeholder="Descripción"></textarea></div>
				<div class="divboton"><button id="bplus" onclick="otra()"><img id="plus" src="img/mas.png" ></button></div>
				<div class="div12"></div>
				<!--<div class="divespacio"></div><div class="div8"><input type="text" placeholder="Logro"></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div8"><textarea placeholder="Descripción"></textarea></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div8"><input type="text" placeholder="Logro"></div>
				<div class="div12"></div>
				<div class="divespacio"></div><div class="div8"><textarea placeholder="Descripción"></textarea></div>
				<div class="div12"></div>-->
				<div class="div12"><button id="aceptar" onclick="guardar(this.form)">Guardar</button></div>
			</form>
			<!--<div class="div6"></div><div class="div1 ">#/##</div><div class="div5"></div>-->
		</div>
		<div style="cursor:pointer;" class="siguiente" onclick="pagina('adelante')">
			<button style="cursor:pointer;"  id="nt"><img src="img/adelante.png"></button>
		</div>
	</div>
</body>
</html>
