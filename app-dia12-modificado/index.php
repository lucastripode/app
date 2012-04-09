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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <header>
            <h1><?php echo "<span class='title'>$title</span>: <span class='subtitle'>$subtitle</span>"; ?></h1>
        </header>        
        <article> 
            <h3>Ejercicio 1</h3> 
           <div id="codeDiv"></div>
            <div id="optionsDiv"> 
                <input type="checkbox" id="Storage"> Storage - (ej2) <br/>
            </div>
            <div id="toChange">Aca se muestra el codigo desarrollado en el textarea.</div>         
        </article> 
        
        <article>
         <h3>Ejercicio 3</h3> 
            <form id="upload" action="index.php" method="POST" enctype="multipart/form-data">
            <fieldset>
            <legend>Files upload</legend>
            <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
            <div>
                    <label for="fileselect">Files to upload:</label>
                    <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                    <div id="filedrag">or drop files here</div>
            </div>
            <div id="submitbutton">
                    <button type="submit">Upload files</button>
            </div>
            </fieldset>
            </form>
            <div id="messages">
            <p>Status files</p>
            </div>        
        </article>
        
        <article>        
        <h3>Ejercicio 4</h3>        
        
            <article>
            <p>Buscando tu ubicacion: <span id="status">cargando...</span></p>
            <div id="mapa"></div>
            </article> 
        </article>
        
        
        <article>        
        <h3>Ejercicio 5</h3>         
        <button onclick="play()">Play worker</button>    
        <button onclick="stop()">Stop worker</button>
        <output id="result"></output>
        <script src="js/worker_index.js"></script>  
        </article>     
                
        <article>        
        <h3>Ejercicio 6</h3>          
        <button onclick="onOpen()">Open websocket</button>    
        <button onclick="doSend('hola')">Send message</button>
        <button onclick="onClose()">Close websocket</button>    
        <button onclick="onError()">Error websocket</button>
        <div id="output"></div>    
        </article>
             
        <script src="js/contenteditable.js"></script>
        <script src="js/file_drag_and_drop.js"></script>        
        <script src="js/geolocation.js"></script>           
        <script src="js/web_socket.js" language="javascript" type="text/javascript"></script>  
        
        <footer>
            <div><?php echo $title; ?> v1.0</div>
            <div>@author Alberto Miranda <a href="mailto:alberto@nextive.com">&lt;alberto@nextive.com&gt;</a></div>
            <div>@author Esteban Abait <a href="mailto:esteban.abait@nextive.com">&lt;esteban.abait@nextive.com&gt;</a></div>
        </footer>
    </body>
</html>