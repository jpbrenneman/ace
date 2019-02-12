<!DOCTYPE html> 

<!-- 
Assignment Name: template
File Name: index.html
Date: 02/05/2019
Programmer:Josh Brenneman
-->

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    
<title>Template</title>

<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/helper.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <main>
        <?php include "includes/header.inc.html.php"; ?>
        <?php include "includes/nav.inc.html.php"; ?>


    <section id="hero">
        <h1>Heading (h1)</h1>
        <img src="images/placeholder.png" alt="Hero Image">
    </section>
        <?php include "includes/nav2.inc.html.php"; ?>

    
    <section>
        <h2>heading 2 (h2)</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fames ac turpis egestas integer. Risus quis varius quam quisque. Suscipit tellus mauris a diam maecenas sed enim ut. Sagittis purus sit amet volutpat consequat.
        </p>
    </section>
        
    
        <h2>Heading 2 (h2)</h2>
        
        <section class="gallery">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
            <img src="images/placeholder-small.png">
        </section>
        
        <div class="weather_and_media">
        <section class="section group">
        <div class="col span_6_of_12">
        
        <h2>Heading 2 (h2)</h2>
        <img src="images/placeholder-iframe.png">
        </div>
        
        <div class="col span_6_of_12">
        <h2>Heading 2 (h2)</h2>
        <img src="images/placeholder-iframe.png">
        
        </div>
        </section>
        </div>



        <?php include "includes/footer.inc.html.php"; ?>
    </main>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/ace.js"></script>

    </body>
</html>