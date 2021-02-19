<?php
	include 'config.php';
	include 'session.php';
	// position
	$year = date('Y');

	if ($_POST['additionTitle'] == 'position') {
		$sql = mysqli_query($conn, "SELECT * from position where electionId = '".$_SESSION['electionId']."' order by positionId Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['positionId'] . '">' . $data['positionName'] . '</option>';
		}
	}

	elseif ($_POST['additionTitle'] == 'partyList') {
		$sql = mysqli_query($conn, "SELECT * from partylist where electionId = '".$_SESSION['electionId']."' order by partyId Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['partyId'] . '">' . $data['partyListName'] . '</option>';
		}
	}

	elseif ($_POST['additionTitle'] == 'roomOrSection') {
		$sql = mysqli_query($conn, "SELECT * from roomorsection where electionId = '".$_SESSION['electionId']."' order by roomOrSectionId Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['roomOrSectionId'] . '">' . $data['roomOrSectionName'] . '</option>';
		}
	}



//////


	elseif ($_POST['additionTitle'] == 'yearLevel') {
		$sql = mysqli_query($conn, "SELECT * from yearlevel where electionId = '".$_SESSION['electionId']."' order by yearLevelid Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['yearLevelid'] . '">' . $data['Year'] . '</option>';
		}
	}

	elseif ($_POST['additionTitle'] == 'course') {
		$sql = mysqli_query($conn, "SELECT * from course where electionId = '".$_SESSION['electionId']."' order by courseId Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['courseId'] . '">' . $data['courseName'] . '</option>';
		}
	}

	elseif ($_POST['additionTitle'] == 'major') {
		$sql = mysqli_query($conn, "SELECT * from major where electionId = '".$_SESSION['electionId']."' order by majorId Desc");
		while ( $data = mysqli_fetch_array($sql) ) {
		    echo '<option value="' . $data['majorId'] . '">' . $data['majorName'] . '</option>';
		}
	}


