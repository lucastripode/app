onmessage = function (evt) {  
    setTimeout(function(){       
        postMessage("Mensaje: " + evt.data);         
    },6000);       
}