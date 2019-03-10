<!DOCTYPE html> 

<!-- 
Assignment Name: ace
File Name: contact.php
Date: 02/24/2019
Programmer:Josh Brenneman
-->

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    
<title>Contact</title>

<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link href="../css/helper.css" rel="stylesheet" type="text/css">
<link href="../css/grid.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <main>

        <?php include "../includes/header.inc.html.php"; ?>
        <?php include "../includes/nav.inc.html.php"; ?>
   

    <section id="hero">
        <h1>Ace in the Hole<br>Multi Sport Events</h1>
    </section>

        <?php include "../includes/nav2.inc.html.php"; ?>
        
        <section class="content">
            <h2>Contact us</h2>
            <form method="post" action=" " id="inquiryForm">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                <label for="myName">Name:</label><br>
                <input type="text" name="myName" id="myName"><br>
                <label for="myEmail">E-mail:</label><br>
                <input type="text" name="myEmail" id="myEmail"><br>
                <label for="myQuestion">Question:</label><br>
                <textarea form="inquiryForm" rows="10" cols="40" name="myQuestion" id="myQuestion"></textarea><br>
                <input id="mySubmit" type="submit" value="Submit">
            </form>

        </section>









        <?php include "../includes/footer.inc.html.php"; ?>
    </main>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/ace.js"></script>

    </body>
</html>