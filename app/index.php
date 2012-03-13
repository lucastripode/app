<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/función-muestra-oculta.js"></script>
<link rel="stylesheet" type="text/css" href="css/miestilo.css" />
</head>
<body>
  <h1>Dia 1 </h1> 
  <div id="console"></div>  
  <input id="alias" type="text" />    
  <br>
  <button id="boton">Boton</button>   
  <br>  
  <div id="mostrar"> </div>         
  <div id="contenido_a_mostrar">  Error en el servidor </div>    
  <script type="text/javascript">	
	window.alert("La pagina se esta cargando!");	
	var console_element = $("#console");	
	var qoute = "<p> My precious! </p>";      
	$("#console").ready(function () { 	 
		$(qoute).appendTo(console_element);   
	});
	$('#alias').focus();
	$(document).ready(function(){
	$("#boton").click(function(evento){
		evento.preventDefault();
		$("#mostrar").load("api/dispatcher.php", {service: "welcome.hello", params:{"name": $('#alias').val() }}, function(data,e){		
			if ( e == 'error'){mostrar_mens('contenido_a_mostrar'); }		
			});			
		});		
	});  
</script>
</body>
</html>