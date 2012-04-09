/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    var wsUri = "ws://echo.websocket.org/"; 
    var output; 

    function init() {
        output = document.getElementById("output"); 
        testWebSocket(); 
    } 
    function testWebSocket() { 
            
            websocket = new WebSocket(wsUri);    
            websocket.onopen = function(evt) { onOpen(evt) }; 
            websocket.onclose = function(evt) { onClose(evt) };
            websocket.onmessage = function(evt) { onMessage(evt) };
            websocket.onerror = function(evt) { onError(evt) };  
    }
    function onOpen(evt) {     
        writeToScreen("CONNECTED");      
    }  
    function onClose(evt) { 
        writeToScreen("DISCONNECTED");
    }
    function onMessage(evt) {
        writeToScreen('<span style="color: blue;">RESPONSE: ' + evt.data+'</span>');
        
    }
    function onError(evt) { 
        writeToScreen('<span style="color: red;">ERROR:</span> ' + evt.data); 
    }
    function doSend(message) { 
        writeToScreen("SENT: " + message);
        websocket.send(message);
    }  
    function writeToScreen(message) {
        var pre = document.createElement("p");
        pre.style.wordWrap = "break-word";
        pre.innerHTML = message; output.appendChild(pre); 
    }      
    window.addEventListener("load", init, false);  

