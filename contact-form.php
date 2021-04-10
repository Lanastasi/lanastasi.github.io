<?php
	$message_sent = false;
	if(isset($_POST['email']) && $_POST['email'] != '') {
		
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
			
			// submit the form
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
			
			$message_sent = true;

    		header("Location: index.html");	
		
		}
	}

	<?php
		if(message_sent):
	?>
		<h3>Thanks, we'll be in touch</h3>
	
    <?php
	
	<?php
		endif;
	?>