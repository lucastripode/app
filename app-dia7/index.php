<?php 
    $title = "HTML5 Practice";
    $subtitle = "Day 4";
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$title: $subtitle"; ?></title>
        <link href="css/default.css" rel="stylesheet" />
        
        <!-- jQuery -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
        
        <!-- default javascript content -->
        <script data-main="js/main" src="js/require-jquery.js"></script>
        
        <script>
                             
                require(["Movie","Director","jquery","jquery.mobile"], function (Movie,Director,$) {
                var alien = new Movie();
                alien.setTitle('Alien');
                alien.setRating('10');
                alien.setId('1032');

                var RidleyScott = new Director ('Ridley Scott');
                RidleyScott.setQuotes(['Cast is everything','Do what you havent...']);
                alien.setDirector(RidleyScott);
                alien.getDirector().speak();  
                                               
                $("#mostrar").append('<p>' + RidleyScott.speak() + '</p>');
                
                            }); 
                                                    
        </script> 
    </head>
    <body>
        <header>
            <h1><?php echo "<span class='title'>$title</span>: <span class='subtitle'>$subtitle</span>"; ?></h1>
        </header>     
        
        <div id = "dialog" data-rel="dialog">                             
            <div id = "mostrar"></div>                            
        </div>
        
        <h3>-- Enjoy! --</h3>
        
        <footer>
            <div><?php echo $title; ?> v1.0</div>
            <div>@author Alberto Miranda <a href="mailto:alberto@nextive.com">&lt;alberto@nextive.com&gt;</a></div>
            <div>@author Esteban Abait <a href="mailto:esteban.abait@nextive.com">&lt;esteban.abait@nextive.com&gt;</a></div>
        </footer>
    </body>
</html>