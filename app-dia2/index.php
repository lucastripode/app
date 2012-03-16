<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
	<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/miestilo.css" />
	
	<script>
	$(document).ready(function(){							
		$("#mostrar_error").hide();		
				
		var console_element = $("#console");	
		var qoute = "<p> My precious! </p>";      
		$("#console").ready(function () { 	 
		$(qoute).appendTo(console_element);   
					});					
				
		$("#boton").click(function(evento){					
			$("#mostrar").load("api/dispatcher.php", {service: "welcome.hello", params:{"name": $('#alias').val() }}, function(data,e){		
				if (e=='error'){$("#mostrar_error").show("slow");}							
						});									
				});	
		$("#alias").focus();
		$("#cuerpo").keyup(function(e) {
			if (e.which==27) {
				$.mobile.hidePageLoadingMsg();
					   }
					});
				});  
		$(document).on("click", ".show-page-loading-msg", function() {			
			$.mobile.showPageLoadingMsg();			
		});
	</script>	
</head> 
<body id="cuerpo" onload="window.alert('La pagina se esta cargando!')"> 
	
	<div data-role="page">
		<div data-role="header">
			<h1>Dia 2 y 3</h1>
		</div>
		<div data-role="content">					
			<div data-role="fieldcontain" id="console">
			</div>				
			<div data-role="fieldcontain" id="entrada">
				<label for="name">Nombre a ingresar:</label>
				<input type="text" value="" id="alias"/>					
			</div>					
			<div data-role="fieldcontain" id="div_boton1">
				<button data-role="button" data-theme="a" id="boton">Presionar</button>									
			</div>						
			<div data-role="fieldcontain" id="mostrar">
			</div>					
			<div data-role="fieldcontain" id="mostrar_error">
				Error en el servidor
			</div>		
			<div data-role="fieldcontain" id="div_boton2">
			<button id="carga" class="show-page-loading-msg" data-theme="a" data-iconpos="right" data-msgtext="Loading theme a...">Cargando...</button>
			</div>	
			
			<div data-role="fieldcontain" id="menu">
			<ul data-role="listview" data-inset="true" data-theme="b" data-dividertheme="a">
				 <li data-role="list-divider">Paginas ....</li>
				 <li><a href="#pagina1">pagina 1 </a></li>
				 <li><a href="#pagina2">pagina 2</a></li>
				 <li><a href="#pagina3">pagina 3</a></li>
			  </ul>
			</div>
			<div data-role="fieldcontain">
			<li><a href="pages/sample1.php" rel="external">Ir a pagina sample1.php</a></li>
			</div>	
		</div>
		<div data-role="footer">
			<h1>Pie de pagina</h1>
		</div>
	</div> 

	<div data-role="page" id="pagina1">
			<div data-role="header">
			<h1>Hola mundo</h1>
			<a href="#pagina2" data-role="button" data-rel="back">Volver</a>
			<a href="#pagina3" data-role="button" data-rel="back">Volver</a>
			</div>
			<div data-role="content">
				<a href="#pagina2" data-role="button">Pagina2</a>
				<a href="#pagina3" data-role="button">Pagina3</a>
			</div>
			<div data-role="footer">
			<h1>Hola Footer</h1>
			</div>
	</div>
	
	<div data-role="page" id="pagina2">
		<div data-role="header">
			<h1>Hola mundo</h1>
			<a href="#pagina1" data-role="button" data-rel="back">Volver</a>
			<a href="#pagina3" data-role="button" data-rel="back">Volver</a>
			</div>			
			<div data-role="content">
				<a href="#pagina1" data-role="button">Pagina1</a>
				<a href="#pagina3" data-role="button">Pagina3</a>
			</div>			
			<div data-role="content">
			<h1>Pagina2</h1>
			</div>
			<div data-role="footer">
			<h1>Hola Footer</h1>
			</div>
		</div>
	<div data-role="page" id="pagina3">
		<div data-role="header">
			<h1>Hola mundo</h1>
			<a href="#pagina1" data-role="button" data-rel="back">Volver</a>
			<a href="#pagina3" data-role="button" data-rel="back">Volver</a>
			</div>
			<div data-role="content">
				<a href="#pagina1" data-role="button">Pagina1</a>
				<a href="#pagin23" data-role="button">Pagina2</a>
			</div>
			<div data-role="content">
			<h1>Pagina3</h1>
			</div>
			<div data-role="footer">
			<h1>Hola Footer</h1>
			</div>
		</div>
</body>
</html>