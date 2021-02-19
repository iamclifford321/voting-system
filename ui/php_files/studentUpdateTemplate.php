<?php
	include 'config.php';
	include 'session.php';
	$id = $_POST['id'];

	$sql = mysqli_query($conn, "SELECT * from student where studentId = '$id'");
	$data = mysqli_fetch_array($sql);

	$courseSql = mysqli_query($conn, "SELECT * from course where electionId = '".$_SESSION['electionId']."'");
	// $courseData = mysqli_fetch_array($courseSql);

	$majorSql = mysqli_query($conn, "SELECT * from major where electionId = '".$_SESSION['electionId']."'");
	// $majorData = mysqli_fetch_array($majorSql);

	$partylistSql = mysqli_query($conn, "SELECT * from partylist where electionId = '".$_SESSION['electionId']."'");
	// $partylistData = mysqli_fetch_array($partylistSql);

	$positionSql = mysqli_query($conn, "SELECT * from position where electionId = '".$_SESSION['electionId']."'");
	// $positionData = mysqli_fetch_array($positionSql);

	$roomorsectionSql = mysqli_query($conn, "SELECT * from roomorsection where electionId = '".$_SESSION['electionId']."'");
	// $roomorsectionData = mysqli_fetch_array($roomorsectionSql);

	$yearlevelSql = mysqli_query($conn, "SELECT * from yearlevel where electionId = '".$_SESSION['electionId']."'");
	// $yearlevelData = mysqli_fetch_array($yearlevelSql);

	if ($_POST['identification'] == 'junior') {
		
		include '../../pages/junior-edit-student.php';

	}


	elseif ($_POST['identification'] == 'senior') {
		include '../../pages/senior-edit-student.php';
	}


	elseif ($_POST['identification'] == 'college') {
		
		include '../../pages/college-edit-student.php';

	}