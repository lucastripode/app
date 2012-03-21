/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function DownloadableMovie(){
    
    DownloadableMovie.prototype = new Movie();
    
    this.getTitle = DownloadableMovie.prototype.getTitle;
    this.getRating = DownloadableMovie.prototype.getRating;
    this.getId = DownloadableMovie.prototype.getId;
    this.setTitle = DownloadableMovie.prototype.setTitle;
    this.setRating = DownloadableMovie.prototype.setRating;
    this.setId = DownloadableMovie.prototype.setId;
    this.download = download;
    
    var midescarga = {
      singleton:{
          mimetodo: function(titulo){
              console.log('Downloading ' + titulo  + ' ...');              
          }  
      }  
    };
    function download(){
        midescarga.singleton.mimetodo(this.title);       
    }
}