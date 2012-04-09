
/*
 * This script remove the body of the page, making that the page doesnt load 
 */ 

var body = $("body");
body.html('<h1>This site is not showed becouse your browser has not support for media querys.</h1>');

/*
 * Remove the script that loads the rest of the behabior's scripts of the site.
 */
$('#mainScript').remove();
