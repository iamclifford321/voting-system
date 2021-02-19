<?php

	include 'config.php';
	include 'session.php';
	if (isset($_POST['CandidatesId'])) {
		foreach ($_POST['CandidatesId'] as $Id) {
			$sql = mysqli_query($conn, "UPDATE candidate set votes = votes + 1 where candidateId = '$Id' " );
		}
	}