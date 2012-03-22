/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

define(function(){
    function Director(name){
        return{
            name:name,
            argumentos:'',
           
           setQuotes: function (argumentos){
                 console.log('setQuotes');
                 this.argumentos=argumentos;
                },    
           speak: function(){
                console.log(this.name + ' says: ' + this.argumentos);
                return this.argumentos;    
                }
        };
    }
    return (Director);
});
