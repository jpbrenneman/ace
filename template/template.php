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
        <h1>Ace in the Hole<br>Multi Sport Events</h1>
    </section>

        <?php include "includes/nav2.inc.html.php"; ?>

        <section class="content">
            <h2>Heading 2 (h2)</h2>
            <img src="images/content_placeholder.png">
        </section>
        
        



        <?php include "includes/footer.inc.html.php"; ?>
    </main>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/ace.js"></script>

    </body>
</html>