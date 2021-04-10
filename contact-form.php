<?php

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userNumber = $_POST['phone'];
    $message = $_POST['message'];

    $email_subject = 'New Form Submission';
 
    $to = "anastasia.lukyanova003@yandex.ru";
	$body = "";

	$body = "From: ".$name."\r\n";
	$body = "Email: ".$userEmail."\r\n";
	$body = "Phone Number: ".$userNumber."\r\n";
	$body = "Message: " .$message."\r\n";
                    
	

    $headers = "From: $userEmail \r\n";
   	mail($to,$email_subject,$body,$headers);

    header("Location: index.html");

    
?>