<?php 
if (!isset($_SESSION)) {
	session_start();
	//var_dump($_SESSION);
	if (!isset($_SESSION['elki'])) {
		$_SESSION['elki']= array();
	}
}
?>