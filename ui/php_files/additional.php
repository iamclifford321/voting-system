<?php
	
	include 'config.php';
	include 'session.php';
	// $partyList;
	// $position;
	// $roomOrSection;
	// $yearLevel;
	// $course;
	// $major;
	// $max;
	// $min;
	// $type;

	$year = date('Y');

	if ($_POST['additionName'] == 'partyList') {
		// partyList
		$partyList = $_POST['partyName'];

		$sql = mysqli_query($conn, "INSERT into partylist ( partyListName, partyListyear,electionId) values ('".$partyList."', '" . $year ."','".$_SESSION['electionId']."')" );
		if ($sql) {

			$msg = 'New partylist called '. $partyList . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");

			echo 'success';
		}	

	} elseif ( $_POST['additionName'] == 'position' ) {
		// Position
		$max = $_POST['max'];
		$min = $_POST['min'];
		$type = $_POST['type'];
		$WhoCan = $_POST['WhoCan'];
		$position = $_POST['position'];
		
		//Query
		$sql = mysqli_query($conn, "INSERT into position ( positionName, max, min, type, positionYear, electionId, WhoCan ) values ('".$position."', '". $max ."', '". $min ."', '" . $type . "', ' " . $year . " ','".$_SESSION['electionId']."', '".$WhoCan."' )" );
		if ($sql) {
			$msg = 'New position called '. $position . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}

	}
	elseif ( $_POST['additionName'] == 'roomOrSection' ) {
		$roomOrSectionName = $_POST['RoomOrSectionName'];
		$sql = mysqli_query($conn, "INSERT into roomorsection ( roomOrSectionName, roomOrSectionYear, electionId ) values ('". $roomOrSectionName ."', '" . $year . "', '".$_SESSION['electionId']."' )" );
		if ($sql) {
			$msg = 'New Room / Section called '. $roomOrSectionName . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}
		
	}

// /////////

	elseif ( $_POST['additionName'] == 'major' ) {
		$majorName = $_POST['majorName'];
		$sql = mysqli_query($conn, "INSERT into major ( majorName, majorYear, electionId ) values ('". $majorName ."', '" . $year . "', '".$_SESSION['electionId']."')" );
		if ($sql) {
			$msg = 'New Major called '. $majorName . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}
		
	}

	elseif ( $_POST['additionName'] == 'course' ) {
		$courseName = $_POST['courseName'];
		$sql = mysqli_query( $conn, "INSERT into course ( courseName, courseYear, electionId ) values ('". $courseName ."', '" . $year . "', '".$_SESSION['electionId']."')" );
		if ($sql) {
			$msg = 'New Course called '. $courseName . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}else{
			echo $conn->error;
		}
		
	}

	elseif ( $_POST['additionName'] == 'yearLevel' ) {
		$yearLevelName = $_POST['yearLevelName'];
		$sql = mysqli_query($conn, "INSERT into yearlevel ( Year, yearLevelyear, electionId ) values ('". $yearLevelName ."', '" . $year . "', '".$_SESSION['electionId']."')" );
		if ($sql) {
			$msg = 'New Year level called '. $yearLevelName . ' added.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}
		
	}
