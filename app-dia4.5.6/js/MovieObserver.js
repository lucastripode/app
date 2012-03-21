/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function MovieObserver () {

    this.handleSub = function(e,event,title) {
        if (event == 'play')
            console.log('Playing ' +title + ' ...');
        else if (event == 'stop')
            console.log('Stop ' + title + ' ...');
        
    }
    $.subscribe("movies",this.handleSub);
}


(function($) {

  var o = $({});

  $.subscribe = function() {
    o.on.apply(o, arguments);
   };

  $.unsubscribe = function() {
    o.off.apply(o, arguments);
  };

  $.publish = function() {
    o.trigger.apply(o, arguments);
   };

}(jQuery));


