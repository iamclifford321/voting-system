<?php
	include 'session.php';

	if ($_POST['type'] == 'election') {
		$_SESSION['electionId'] = $_POST['setId'];
		$_SESSION['electionName'] = $_POST['dataName'];
		$_SESSION['electionFor'] = $_POST['dataType'];
		echo 'success';
	}