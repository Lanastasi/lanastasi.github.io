<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_number = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'Liiisss003@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                    "User Number: $phone.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "anastasia.lukyanova003@yandex.ru"

    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    
?>
