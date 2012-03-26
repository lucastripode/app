// **This example illustrates the declaration and instantiation of a minimalist View.**
//
// _Working example: [1.html](../1.html)._  
// _[Go to Example 2](2.html)_

// Self-executing wrapper
(function($){
  // **ListView class**: Our main app view.
  var ListView = Backbone.View.extend({    
    el: $('body'), // attaches `this.el` to an existing element.
    // `initialize()`: Automatically called upon instantiation. Where you make all types of bindings, _excluding_ UI events, such as clicks, etc.
    initialize: function(){
      _.bindAll(this, 'render'); // fixes loss of context for 'this' within methods
       
       this.render(); // not all views are self-rendering. This one is.
    },
    // `render()`: Function in charge of rendering the entire view in `this.el`. Needs to be manually called by the user.
    render: function(){
        var dataList = [{
                first_name : "Lucas",
                last_name : "Tripode",
                age: "25",
                city : "Bahia Blanca",  
                education : "UNS",
                professional_experience : "pasantias",
                goals : "ser el mejor",
                specialties : "ninguna"   
                
            },        
            {
                first_name : "Chori",
                last_name : "Dominguez",
                age: "35",
                ciudad : "Buenos Aires",  
                education : "River Plate",
                professional_experience : "en Europa",
                goals : "hacer goles",
                specialties : "tiro libres y cornerls"   
                
            },            
            {
                first_name : "Rocky",
                last_name : "Balboa",
                age: "65",
                ciudad : "Hollywood",  
                education : "La calle",
                professional_experience : "muchas peleas",
                goals : "Knout",
                specialties : "ganchos"   
                
            } 
        ];
        
      for(var i = 0; i < dataList.length; i++){
        var data = dataList[i];   
            $(this.el).append("<h2>" + data.first_name + " " + data.last_name + "</h2>");           
            $(this.el).append("<ul> <li>" + data.age + "</li> </ul>");
            $(this.el).append("<ul> <li>" + data.ciudad + "</li> </ul>");
            $(this.el).append("<ul> <li>" + data.education + "</li> </ul>");
            $(this.el).append("<ul> <li>" + data.professional_experience + "</li> </ul>");
            $(this.el).append("<ul> <li>" + data.goals + "</li> </ul>");
            $(this.el).append("<ul> <li>" + data.specialties + "</li> </ul>");            
            $(this.el).append("<br> </br> <br> </br");            
        }  
    }
  });
  // **listView instance**: Instantiate main app view.
  var listView = new ListView();      
})(jQuery);

