<!DOCTYPE html> 

<!-- 
Assignment Name: ace
File Name: registration.php
Date: 02/11/2019
Programmer:Josh Brenneman
-->

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
    
<title>Registration</title>

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
            <h2>Register for an Event</h2>
            <form method="post" action=" ">
                <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>

                <label for="fname">First Name:</label><br>
                <input typ="text" id="fname" name="fname"><br>

                <label for="lname">Last Name:</label><br>
                <input type="text" id="lname" name="lname"><br>

                <label for="email">E-mail:</label><br>
                <input type="email" id="email" name="email"><br>

                <label for="age">Age:</label><br>
                <input type="number" id="age" name="age"><br>

                <label for="genderid">Gender Identification:</label><br>
                <select id="genderid" name="genderid">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="non-binary">Non-Binary</option>
                </select><br>

                <label for="event">Event:</label><br>
                <select id="event" name="event">
                    <option value="Long Course, Saturday 7:00 A.M.">Long Course, Saturday 7:00 A.M. - $240</option>
                    <option value="Olympic, Saturday 7:30 A.M.">Olympic, Saturday 7:30 A.M. - $110</option>
                    <option value="10K, Saturday 7:15 A.M.">10K, Saturday 7:15 A.M. - $50</option>
                    <option value="Half Marathon, Saturday 7:15 A.M.">Half Marathon, Saturday 7:15 A.M. - $75</option>
                    <option value="Sprint, Sunday 7:30 A.M.">Sprint, Sunday 8:00 A.M. - $90</option>
                    <option value="Try-A-Tri, Sunday 7:30 A.M.">Try-A-Tri, Sunday 8:20 A.M. - $75</option>
                </select><br>

                <label for="role">Athlete or Volunteer:</label><br>
                <select id="role" name="role">
                    <option value="Volunteer">Volunteer</option>
                    <option value="Athlete">Athlete</option>
                </select><br>

                <label for="tshirt">T-shirt size:</label><br>
                <select id="tshirt" name="tshirt">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                    <option value="3xl">3XL</option>
                    <option value="4xl">4XL</option>
                </select><br>

                <label for="notes">Special Accommodations:</label><br>
                <input type="text" id="notes" name="notes"><br>

                Emergency contact<br>
                <label for="emergencyname">Name:</label><br>
                <input type="text" id="emergencyname" name="emergencyname"><br>

                <label for="emergencyphone">Phone Number:</label><br>
                <input type="tel" id= "emergencyphone" name="emergencyphone"><br><br>

                <input type="submit" id="submit" value="Submit"><br>
            </form>

        </section>








        <?php include "../includes/footer.inc.html.php"; ?>
    </main>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/ace.js"></script>

    </body>
</html>