<?php 
     date_default_timezone_set('Asia/Kolkata');
     require 'PHPMailerAutoload.php';

	$name    = (isset($_POST['username'])?$_POST['username']:"");
	$email   = (isset($_POST['email'])?$_POST['email']:"");
	$phone   = (isset($_POST['phone'])?$_POST['phone']:"");

	$subject = "Enquiry Form | Nixace Technologies";
	$message = "<div>
		
		<h4>Student Details</h4>
		<p>
			Name:$name <br>
			Email:$email <br>
			Mobile Number: $phone <br>
		</p>
		
	</div>";
	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	//$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = "ssl://smtp.gmail.com";
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 465;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	try {
		$mail->Username = "chetan.marathe@nixacetech.com";
		//Password to use for SMTP authentication
		$mail->Password = "pass123!@#";
		//Set who the message is to be sent from
		$mail->setFrom("noreply@nixacetech.com" ,"Enquiry");
		//Set an alternative reply-to address
		$mail->addReplyTo($email, $name);
		//Set who the message is to be sent to
		$mail->addAddress('chetan.marathe@nixacetech.com', 'Admin');
		//Set the subject line
		$mail->Subject = $subject;
		$body = '<html>
			<body>
				<div><br /> 
					<b> '.$message.'</b><br />
				</div>
			</body>
			</html>
			';
			
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($body);
		//Replace the plain text body with one created manually*/
		$mail->AltBody = 'This is a plain-text message body';
		//Attach an image file
		// if($attach != ""){
		// 	$mail->addAttachment($attach);
		if ($mail->send()) {
		echo "mailsent";
		// $message = "Your Password has been sent to your registered Email Address!";
		// echo "<script type='text/javascript'>alert('$message');</script>";
		// header('Location: index.php');
			
		} 
		else {
			echo "failed";
			//echo $mail->errorMessage(); //Pretty error messages from PHPMailer
		}
		// }
		} catch (phpmailerException $e) {

		}

?>
