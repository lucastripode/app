/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function Movie() {
   
    var title ;
    var rating;
    var id;
  
    this.getTitle= getTitle;
    this.setTitle= setTitle;
    this.getRating= getRating;
    this.setRating= setRating;
    this.getId= getId;
    this.setId= setId;
    
    function getTitle(){
        return this.title;
    }    
    function setTitle(title){
       this.title=title;
    }    
    function getRating(){
        return this.rating;
    }
    function setRating(rating){
        this.rating=rating;
    }
    function getId(){
        return this.id;
    }
    function setId(id){
        this.id=id;
    }  
    
}

Movie.prototype.play = function(){ 
    $.publish("movies",['play',this.getTitle()]);
}
Movie.prototype.stop = function() { 
    $.publish("movies",['stop',this.getTitle()]); 
}
augment(Movie, Mixin,'share','like');