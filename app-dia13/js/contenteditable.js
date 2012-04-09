    var t_area = document.createElement('textarea');
    t_area.style.width = '500px'; 
    t_area.style.height = '250px';

    var b_code = document.createElement('input');
    b_code.name="buttonExecute";
    b_code.type="button";
    b_code.value="Ejecutar codigo";    
    
    var headID = document.getElementsByTagName("head")[0];
    document.querySelector('#codeDiv').appendChild(t_area);
    document.querySelector('#optionsDiv').appendChild(b_code);
    
    t_area.value = 'document.getElementById("toChange").innerHTML = "<div>Contenido cambiado por el script del text area...</div>";';

    b_code.addEventListener( 'click', function(){
        var storageCheck = document.getElementById("storageCheck");
        
        if ( storageCheck.checked )
            storageCode(t_area);
        
        executeCode(t_area);
    });

    function executeCode(codeEl) {
        var newScript = document.createElement("script");
        newScript.type = "text/javascript";
        newScript.innerHTML = codeEl.value;
        headID.appendChild( newScript );
    }

    function storageCode(elem) {
        window.localStorage['code'] = elem.value;        
    }