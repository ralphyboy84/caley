<?php


	
	require_once("globals.php");
	require_once("dbController.class.php");
	
	$dbArgs = array (
		'content' => "test",
		'type' => 'test'
	);
	
	$db = new dbController();
	$db->insertFormSubmissionTest($dbArgs);

?>