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

    // Send email
   
    $honeypot = $_POST['honeypot'];
    
    //check if the honeypot field is filled out. If not, send a mail.
    if( ! empty( $honeypot ) ){
      return; //you may add code here to echo an error etc.
    }
    else{
        $result = mail($to,$subject,$message,$headers);
        if($result){
            echo message send with success;
        }
    }
    ?>
