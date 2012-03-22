/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
define(function(){  
    function Movie(){
        return{
            title:'',
            rating:'',
            id:'',
            director:require(["Director"],function(Director){}),
            getTitle: function (){
                console.log('getTitle');
                return this.title;
                },    
            setTitle: function(title){
                console.log('setTitle');
                this.title=title;
                },   
            getRating: function (){
                console.log('getRating');
                return this.rating;
                },
            setRating: function (rating){
                console.log('setRating');
                this.rating=rating;
                },
            getId: function (){
                console.log('getId');
                return this.id;
                },
            setId: function (id){
                console.log('setId');
                this.id=id;
                },  
            setDirector: function(director){
                console.log('setDirector');
                this.director=director;
            },    
            getDirector: function(){
                console.log('getDirector');
                return this.director;
            }
        };
    }
    return (Movie);
});