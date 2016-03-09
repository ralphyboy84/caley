<?php

require_once 'mysqlExecutor.class.php';

class dbController extends mysqlExecutor
{
	//function to insert a website form submission
	function insertFormSubmission ( $args )
	{
		$sql = " INSERT into form set ";
		
		if ( $args ) {
			foreach ( $args as $key => $vals ) {
				$params[] = " $key = '".$vals."' ";
			}
		}
		
		$sql.= implode ( "," , $params  ).", datetime = now() ";
		
		return $this->insertQuery($sql);
	}
	
	
	//function to insert a website form submission
	function insertFormSubmissionTest ( $args )
	{
		$sql = " INSERT into testform set ";
		
		if ( $args ) {
			foreach ( $args as $key => $vals ) {
				$params[] = " $key = '".mysql_real_escape_string($vals)."' ";
			}
		}
		
		$sql.= implode ( "," , $params  ).", datetime = now() ";
		
		return $this->insertQuery($sql);
	}
}

?>