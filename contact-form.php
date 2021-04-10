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
			else:
	?>
            <div class="form-inner-wrapper">
                <form id="contactForm" method="post" action="contact-form.php">
                <div class="field-list clear">
                        <div id="name" class="form-item field email required">
                                  <label class="title" for="name">Name <span class="required">*</span></label>
                                  <input class="field-element" name="name" x-autocompletetype="name" type="text" spellcheck="false">
                            </div>

                            <div id="email" class="form-item field email required">
                                <label class="title" for="email">Email Address <span class="required">*</span></label>
                                <input class="field-element" name="email"  x-autocompletetype="email" type="text" id="email-field">
                            </div>
                        <div id="number" class="form-item field email required">
                              <label class="title" for="number">Number <span class="required">*</span></label>
                              <input  class="field-element" type="tel" name="phone" id="phone"required spellcheck="false">

                          </div>
                            <div id="textarea" class="form-item field textarea required">
                                <label class="title" for="textarea-field">Message <span class="required">*</span></label>
                                <textarea class="field-element" id="textarea--field" name="message"></textarea>
                              </div>
            <div id="contactResponse"></div>
            <div class="form-button-wrapper form-button-wrapper--align-center">
                              <input class="contact-one__btn button" type="submit" name="submit" value="Submit">
                       </div>

                </div>
                </form>
            </div>
	<?php
		endif;
	?>