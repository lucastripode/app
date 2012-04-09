/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function play() {
            worker.postMessage("Play worker ...");
        }
        function stop() {   
            worker.postMessage("Stop worker ...");
        }         
        var worker = new Worker('js/worker.js');        
        worker.addEventListener('message', function(evt) {            
            document.getElementById('result').textContent = evt.data;            
        }, false); 

