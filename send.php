<?php

    $emailCpanel = "email on cpanel";
    $myPersonalEmail = "newtech290320@gmail.com";
    
    if( isset($_POST['submit']) ) {
        $subject = htmlspecialchars($_POST['subject']);
        $name = htmlspecialchars($_POST['name']);
        $number = htmlspecialchars($_POST['hp']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['pesan']);
        $headers = "From: Contact Form <" . $emailCpanel . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "<" . $number . ">" . "\r\n";
        
        echo "Your Message Has Been Send !!! <br> Thank You For Yout Submitted"; 
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo "Sorry, Your Message Not Send !!! Try Again!!!";
    }
?>