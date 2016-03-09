<?php

if (	$_POST['joinNameInput'] 
	 && $_POST['joinEmailInput'] 
	 && $_POST['joinAddressInput']
	 && $_POST['joinPhoneInput']
	 && $_POST['joinDobInput']
	 && $_POST['joinPrevClubsInput']
	 && $_POST['joinProposerNameInput']
	 && $_POST['joinSeconderNameInput'] ) {
	 
	$name = $_POST['joinNameInput'];
	$email = $_POST['joinEmailInput'];
	 
	$proposer = $_POST['joinProposerNameInput'];
	 
	if ($_POST['joinProposerEmailInput']) {
		$proposerEmail = "(".$_POST['joinProposerEmailInput'].")";
	}
	 
	$seconder = $_POST['joinSeconderNameInput'];
	 
	if ($_POST['joinSeconderEmailInput']) {
		$seconderEmail = "(".$_POST['joinSeconderEmailInput'].")";
	}
	
	$address = $_POST['joinAddressInput'];
	$phoneno = $_POST['joinPhoneInput'];
	$previousClubs = $_POST['joinPrevClubsInput'];
	$dob = $_POST['joinDobInput'];
	$membertype = $_POST['joinMembershipTypeInput'];
	
	if ($_POST['joinSeasonTicketNoInput']) {
		$seasonTicketString = "They currently hold season ticket number ".$_POST['joinSeasonTicketNoInput']."<br />";
	}
	
	if ($_POST['joinSeasonTicketTypeInput']) {
		$seasonTicketTypeString = "They currently have a ".$_POST['joinSeasonTicketTypeInput']." season ticket.<br />";
	}
	
	if ($_POST['joinHandicapInput']) {
		$handicapString = "They currently possess a handicap of ".$_POST['joinHandicapInput']."<br />";
	}
	
	if ($_POST['joinHomeClubInput'] == "YES") {
		$homeClubString = "They would like to make the Caledonia Golf Club their home club.<br />";
	} else if ($_POST['joinHomeClubInput'] == "NO") {
		$homeClubString = "They do not want to make the Caledonia Golf Club their home club at this point in time.<br />";
	}

	$message=<<<EOHTML
	<h1>Caledonia Golf Club - Online Membership Application Form</h1>
	We have received a membership application request from <strong>$name</strong> - $dob ($email). <br /><br />
	They have been Proposed by <strong>$proposer</strong> $proposerEmail and Seconded by <strong>$seconder</strong> $seconderEmail.<br /><br />
	Their current address is: $address<br />
	Their phone number is: $phoneno<br />
	They have previously been a member of the following clubs: $previousClubs<br /><br />
	They are applying for a $membertype membership<br />
	$seasonTicketString
	$seasonTicketTypeString
	$handicapString
	$homeClubString
EOHTML;

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: Carnoustie Caledonia Golf Club <caley@carnoustiecaledonia.co.uk>";
	
	//mail("clubsecretary@carnoustiecaledonia.co.uk", "Membership Application", $message, $headers);
	mail("ralph@ralphwardlaw.co.uk", "Membership Application", $message, $headers);
	echo "<p class='lead'>Thanks for applying to join the 'Caley' online. Someone form the club will be in touch with you shortly.</p>";
	
	require_once("globals.php");
	require_once("dbController.class.php");
	
	$dbArgs = array (
		'content' => $message,
		'type' => 'Application'
	);
	
	$db = new dbController();
	$db->insertFormSubmission($dbArgs);
}
?>