<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    

    $email_form='igecsagarmp@igecsagar.ac.in ';
    $email_subject ='New from submission';
    $email_body = "User Name: $name.\n".
                  "User Name: $visitor_email.\n".
                  "User Name: $subject.\n".
                  "User Name: $message.\n";
                 
    $to = 'shivaniarya987@gmail.com';
   
    $headers = "From: $email_from\r\n";
    $headers  = "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Loction:contact.html");


?>