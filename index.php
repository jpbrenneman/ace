<!DOCTYPE html> 

<!-- 
Assignment Name: ace
File Name: index.php
Date: 02/05/2019
Programmer:Josh Brenneman
-->

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    
<title>Ace in the Hole</title>

<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/helper.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.min.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <main>
        <?php include "includes/header.inc.html.php"; ?>
        <?php include "includes/nav.inc.html.php"; ?>


    <section id="hero">
        <h1>Ace in the Hole<br>Multi Sport Events</h1>
    </section>

        <?php include "includes/nav2.inc.html.php"; ?>

        <section class="content">
            <h2>About Ace Multisport events</h2>
            <p>
            Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations, gender identities, and cultural backgrounds. We offer Events for Everybody.
            </p>
            <h3>About the event</h3>
            <p>
            The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. 
            </p>
            <p>
            There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
            </p>
            
            <div class="gallery">
                <a href="images/image-2.png" data-lightbox="mygallery"><img src=images/image-2-small.png></a>
                <a href="images/image-3.png" data-lightbox="mygallery"><img src=images/image-3-small.png></a>
                <a href="images/image-4.png" data-lightbox="mygallery"><img src=images/image-4-small.png></a>
                <a href="images/image-5.png" data-lightbox="mygallery"><img src=images/image-5-small.png></a>
                <a href="images/image-6.png" data-lightbox="mygallery"><img src=images/image-6-small.png></a>
                <a href="images/image-7.png" data-lightbox="mygallery"><img src=images/image-7-small.png></a>
                <a href="images/image-8.png" data-lightbox="mygallery"><img src=images/image-8-small.png></a>
                <a href="images/image-9.png" data-lightbox="mygallery"><img src=images/image-9-small.png></a>
                <a href="images/image-10.png" data-lightbox="mygallery"><img src=images/image-10-small.png></a>
            </div>
        
            
            <section id="media" class="section group">
                
            <div class="col span_4_of_12">
            <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-days="5" data-theme="pure" >PORTLAND WEATHER</a>
            <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
            </div>
            
            
            <div class="col span_4_of_12"> 
               
            <blockquote class="twitter-tweet" tw-align-center data-lang="en"><p lang="en" dir="ltr">Any weather is training weather!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/1055566270580445185?ref_src=twsrc%5Etfw">October 25, 2018</a></blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            
            <blockquote class="twitter-tweet" tw-align-center data-lang="en"><p lang="en" dir="ltr">Fantastic weather for training! Can&#39;t wait to get in the water for open water swims!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/994599695136653312?ref_src=twsrc%5Etfw">May 10, 2018</a></blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                

            </div>
                
            <div class="col span_4_of_12">
             <center><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2Fposts%2F366912850439109" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
            
            <center><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2Fposts%2F395659867564407"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
                
            </div>
                
            </section>
        </section>

            
        
        
        



        <?php include "includes/footer.inc.html.php"; ?>
    </main>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/ace.js"></script>
<script src="scripts/lightbox-plus-jquery.min.js"></script>

    </body>
</html>