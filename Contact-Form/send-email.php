<?php
    require 'SendGrid-API/vendor/autoload.php'; //sendgrid dependency 
    require 'API-Key/key.php'; //Your SendGrid API Key, starts with 'SG'

    //Post Variables
    if (isset($_POST['submit'])) {
        $client = $_POST['Name']; 
        $sender = $_POST['Email'];  
        $subject = $_POST['Subject'];
        $message = $_POST['Message'];
    }

    //Recipient Data
    $recipient = "youremail@mail.com"; 
    $company = "Your Website Name"; 

    //SendGrid Email Data
    $from = new \SendGrid\Email($client, $sender); 
    $to = new \SendGrid\Email($company, $recipient); 
    $content = new \SendGrid\Content("text/html", $message); 
    
    
    //Send Email
    $mail = new \SendGrid\Mail($from, $subject, $to, $content ); 
    $sg = new \SendGrid($apiKey); #import key from API-Key/key.php

    //Response
    $response = $sg->client->mail()->send()->post($mail); 
    print_r($response); //print to screen


?> 