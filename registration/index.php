<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=ariannar_acedb', 'ariannar_ace_user', 'Arianna13!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.html.php';
    exit();
}
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['fname']) AND empty($_POST['honeypot'])) {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $genderid = $_POST['genderid'];
    $event = $_POST['event'];
    $role = $_POST['role'];
    $tshirt = $_POST['tshirt'];
    $notes = $_POST['notes'];
    $emergencyname = $_POST['emergencyname'];
    $emergencyphone = $_POST['emergencyphone'];


// And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          fname = :fname,
          lname = :lname,
          email = :email,
          age = :age,
          genderid = :genderid,
          event = :event,
          role = :role,
          tshirt = :tshirt,
          notes = :notes,
          emergencyname = :emergencyname,
          emergencyphone = :emergencyphone';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $fname);
        $s->bindValue(':lname', $lname);
        $s->bindValue(':email', $email);
        $s->bindValue(':age', $age);
        $s->bindValue(':genderid', $genderid);
        $s->bindValue(':event', $event);
        $s->bindValue(':role', $role);
        $s->bindValue( ':tshirt', $tshirt);
        $s->bindValue(':notes', $notes);
        $s->bindValue(':emergencyname', $emergencyname);
        $s->bindValue(':emergencyphone', $emergencyphone);
        $s->execute();
    }

    catch (PDOException $e) {
        $error = 'Error adding information: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
} else{
    include 'registration.html.php';
}
//Modify this to include the initial file for this folder
?>
