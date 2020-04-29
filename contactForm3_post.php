<?php ob_start(); ?>
<?php
//echo "<pre>"; print_r($_POST);die();
	if(isset($_POST['name3'])){
		 $name = $_POST['name3'];
		 $contactno = $_POST['phone3'];
		// $city = $_POST['city'];
		 $email_from = $_POST['email3'];
		 //$message = $_POST['message3'];
		 //$video = $_POST['video'];
		 $email_to = 'chetan.marathe@nixacetech.com';
		 $notes_name = '';
		 $filename = "";
		if(isset($_POST['notes_for'])){
			switch($_POST['notes_for']){
				case "BondValuation":
				  $filename = "assets/notes/BondValuation.pdf";
				  $notes_name = "Bond Valuation";
				  break;

				case "CapitalBudgeting":
				  $filename = "assets/notes/CapitalBudgeting.pdf";
				  $notes_name = "Capital Budgeting";
				  break;
				  
				case "DividendDecisions":
				  $filename = "assets/notes/DividendDecisions.pdf";
				  $notes_name = "Dividend Decisions";
				  break;

				case "EquityValuation":
				  $filename = "assets/notes/EquityValuation.pdf";
				  $notes_name = "Equity Valuation";
				  break;

				case "ForeignExchange":
				  $filename = "assets/notes/ForeignExchange.pdf";
				  $notes_name = "FNF Notes";
				  break;
				
				case "FuturesForwards":
				  $filename = "assets/notes/FuturesForwards.pdf";
				  $notes_name = "Futures Forwards";
				  break;
				
				case "Leasing":
				  $filename = "assets/notes/Leasing.pdf";
				  $notes_name = "Leasing";
				  break;
				
				case "MergerAcquisition":
				  $filename = "assets/notes/MergerAcquisition.pdf";
				  $notes_name = "Merger Acquisition";
				  break;
				
				case "MutualFund":
				  $filename = "assets/notes/MutualFund.pdf";
				  $notes_name = "Mutual Fund";
				  break;
				
				case "Options":
				  $filename = "assets/notes/Options.pdf";
				  $notes_name = "Options";
				  break;
				
				case "PortfolioManagement":
				  $filename = "assets/notes/PortfolioManagement.pdf";
				  $notes_name = "Portfolio Management";
				  break;
				
				case "SwapsInterestRateDerivatives":
				  $filename = "assets/notes/SwapsInterestRateDerivatives.pdf";
				  $notes_name = " Swaps Interest Rate Derivatives";
				  break;
				
				default: $filename = "error"; break;
			}
		}
		 

		 //Enter Data to Database
			$servername = "manishramuka.com";
			$username = "bitsoabw_mrdata";
			$password = "mrdata@123";
			$dbname = "bitsoabw_mrdata";
			
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			$sql = 'INSERT INTO notesdata (name, phone, email, notes) VALUES ("'.$name.'",'.$contactno.',"'.$email_from.'","'.$notes_name.'")';
			if (mysqli_query($conn,$sql)) {
				//echo "run";	
				
			}else{
				//echo "no run";
				
			}
		 /*ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);*/
	/**
	 * This example shows making an SMTP connection with authentication.
	 */

	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Asia/Kolkata');

	require 'PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Tell PHPMailer to use SMTP
	//$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server
	$mail->Host = "mail.manishramuka.com";
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 25;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = "noreply@manishramuka.com";
	//Password to use for SMTP authentication
	$mail->Password = "noreply@123";
	//Set who the message is to be sent from
	$mail->setFrom("noreply@manishramuka.com" ,"Enquiry");
	//Set an alternative reply-to address
	/*$mail->addReplyTo('xyz@angelbroking.in', 'First Last');*/
	//Set who the message is to be sent to
	$mail->addAddress('chetan.marathe@nixacetech.com', 'Adnmin');
	//$mail->addAddress('jayesh.6191@gmail.com', 'Admin');
	//$mail->addAddress('manishramuka@gmail.com', 'Admin');
	//Set the subject line
	$mail->Subject = 'Notes Downloaded';
	$body = "<html>
		<body>
			<div>Enquiry Details<br />
				<b>Name: $name </b><br />
				<b>Contact No.: $contactno </b><br />
				<b>Email: $email_from </b><br />
				<b>Notes Name : $notes_name </b><br/>
				
			</div>
		</body>
		</html>
		";
		
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->msgHTML($body);
	//Replace the plain text body with one created manually*/
	$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');*/

	//var_dump($mail) ;

	//send the message, check for errors
	if ($mail->send()) {
        	echo "1$".$filename;
	} else {
		echo "0$";
	}
		 
		 

				
		/*$email_subject = 'Presentation Downloaded SEO';

		$email_message = "
		<html>
		<body>
			<div>Details<br />
				<b>Name: {$name}</b><br />
				<b>Contact No.: {$contactno}</b><br />
				<b>Website: {$message}</b><br />
				<b>Email: {$email_from}</b><br />
			</div>
		</body>
		</html>
		";
		

		// create email headers
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
		// Additional headers
		$headers .= 'From: ' . $email_from . ' <'.$email_from.'>' . "\r\n" . 'Reply-To: ' . $email_from;
		$response = mail($email_to, $email_subject, $email_message, $headers);
		if($response)
		{
			echo '1';
		}
		else
		{
			echo 'failed';
		}*/
	}else{
		header('Location: notes.php');
	}
?>
<?php ob_flush(); ?>
