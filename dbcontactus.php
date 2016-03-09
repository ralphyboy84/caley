<?php

if ($_POST['name'] && $_POST['email'] && $_POST['comment']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	
	$message=<<<EOHTML
	The following message was left by $name ($email): <br /><br />
	$comment
EOHTML;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: Carnoustie Caledonia Golf Club <caley@carnoustiecaledonia.co.uk>";
	
	mail("clubsecretary@carnoustiecaledonia.co.uk", "Website enquiry", $message, $headers);
	mail("clubcaptain@carnoustiecaledonia.co.uk", "Website enquiry", $message, $headers);
	mail("ralph@ralphwardlaw.co.uk", "Website enquiry", $message, $headers);
	echo "<p class='lead'>Thanks for your message. Someone from the club will be in touch shortly.</p>";
	
	require_once("globals.php");
	require_once("dbController.class.php");
	
	$dbArgs = array (
		'content' => $message,
		'type' => 'Contact Enquiry'
	);
	
	$db = new dbController();
	$db->insertFormSubmission($dbArgs);
}

?>