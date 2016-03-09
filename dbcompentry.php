<?php

if ($_POST['name'] && $_POST['email']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	if ($_POST['watson'] == "true") {
		$compArray[] = "The Watson Trophy";
	}
	
	if ($_POST['tsb'] == "true") {
		$compArray[] = "The TSB Trophy";
	}
	
	if ($_POST['robertson'] == "true") {
		$compArray[] = "The Donald Robertson Trophy";
	}
	
	if ($_POST['bruce'] == "true") {
		$compArray[] = "The JP Bruce Trophy";
	}
	
	if ($_POST['jdlittle'] == "true") {
		$compArray[] = "The JD Little Tankard with ".$_POST['jdlittlepartnerinput'];
	}
	
	if ($_POST['ruark'] == "true") {
		$compArray[] = "The WF Ruark Trophy with ".$_POST['ruarkpartnerinput'];
	}
	
	if (!$compArray) {
		echo "Oops something has gone wrong.";
	} else {
		$compString = implode($compArray, "<br />");
	}
	
	$message=<<<EOHTML
	$name ($email) wishes to enter the following competitions: <br /><br />
	$compString
EOHTML;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: Carnoustie Caledonia Golf Club<caley@carnoustiecaledonia.co.uk>";
	
	mail("matchsecretary@carnoustiecaledonia.co.uk", "Competition Entry", $message, $headers);
	mail("ralph@ralphwardlaw.co.uk", "Competition Entry", $message, $headers);
	echo "<p class='lead'>Thanks for you entering this years competitions. Should you wish to change any of the above information please contact the <a href='mailto:matchsecretary@carnoustiecaledonia.co.uk'>Match Secretary</a></p>";
	
	require_once("globals.php");
	require_once("dbController.class.php");
	
	$dbArgs = array (
		'content' => $message,
		'type' => 'Competition Entry'
	);
	
	$db = new dbController();
	$db->insertFormSubmission($dbArgs);
}
?>