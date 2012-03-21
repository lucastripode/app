/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var Mixin = function(){}
Mixin.prototype = {
    
    share: function(friendName){
        console.log('share('+friendName+')');        
    },        
    like: function(){
        console.log('like()');        
    }     
};

// Augment existing 'class' with a method from another
function augment( receivingClass, givingClass ) {
    if ( arguments[2] ) {
        for (var i=2, len=arguments.length; i<len; i++) {
            receivingClass.prototype[arguments[i]] = givingClass.prototype[arguments[i]];
            }
        }
  else {
    for ( var methodName in givingClass.prototype ) {
      if ( !receivingClass.prototype[methodName] ) {
        receivingClass.prototype[methodName] = givingClass.prototype[methodName];
      }
    }
  }
}