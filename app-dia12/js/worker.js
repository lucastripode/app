/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 var t; 
  function mensaje(){
      postMessage("Hola mundo..");
      return 0;
  }  
  function timedCount(){  
      t=setTimeout("timedCount()",60000);      
      this.mensaje();
      return 0;
  }  
  this.timedCount();

