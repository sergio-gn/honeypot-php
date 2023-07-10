<?php
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set up email
    $to = "example@fakemail.com";
    $subject = "Contact Form Submission";
    $message = "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nSuburb: ".$message;
    $headers = "From: ".$email;

    // Grab info from Honeypot Field
    $honeypot = $_POST['honeypot'];
    
    // Send email
    //check if the honeypot field is filled out. If anything is typed inside, return it(discard). If not, send a mail.
    if(!empty( $honeypot)){
      return; //you may add code here to echo an error etc.
    }
    else{
        $result = mail($to,$subject,$message,$headers);
        if($result){
            echo message sent with success;
        }
    }
    ?>
