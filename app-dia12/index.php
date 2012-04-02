<?php 
    $title = "HTML5 Practice";
    $subtitle = "Day 8";
?>
<!doctype html>
<html lang="en" manifest="offline.manifest">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$title: $subtitle"; ?></title>
        <link href="css/default.css" rel="stylesheet" /> 
        <script src="js/h5utils.js"></script>        
    </head>
    <body>
        <header>
            <h1><?php echo "<span class='title'>$title</span>: <span class='subtitle'>$subtitle</span>"; ?></h1>
        </header>
        
        <article> 
            <h3>Ejercicios 1 y 2</h3>
            <section id="editable" contenteditable="true">
                <h4>titulo</h4>
                <p>parrafo</p>
                <ol>
                    <li>fila 1 </li>
                    <li>fila 2 </li>
                    <li>fila 3 </li>
                </ol>
            </section>
            <div>
                <input type="button" id="clear" value="Limpiar cambios" />
            </div>
        </article>   
        
        <article>
        <h3>Ejercicio 3</h3>
        <h4>Arrastra el archivo para ver</h4>
        <div id="bin"></div>
        <ul>
            <li><a id="one" href="#">one</a></li>
        </ul>
        </article>
        
        <article>        
        <h3>Ejercicio 4</h3>        
        <a class="web" href="geolocation.html"> ir a GeoLocation.html</a>  
        </article>
        
        <article>        
        <h3>Ejercicio 5 y 6</h3> 
        <a class="web" href="websocket.html"> ir a WebSocket.html</a>   
        </article>
        <script src="js/contenteditable.js"></script>
        <script src="js/drop_and_drag.js"></script>        
        <footer>
            <div><?php echo $title; ?> v1.0</div>
            <div>@author Alberto Miranda <a href="mailto:alberto@nextive.com">&lt;alberto@nextive.com&gt;</a></div>
            <div>@author Esteban Abait <a href="mailto:esteban.abait@nextive.com">&lt;esteban.abait@nextive.com&gt;</a></div>
        </footer>
    </body>
</html>