<?php
	include 'session.php';
	include 'config.php';
	if ($_POST['type'] == 'user') {

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$password = md5($_POST['password']);
			$email = $_POST['email'];
			$userId = time() . rand(0, 1000);
			$session_id = date('m-d-Y') . ' - ' . base64_encode(rand(1,1000));
			$sql = mysqli_query($conn, "INSERT INTO users (userId, userAbove, firstName, lastName, username, email, type, password, session_id,electionId ) VAlues ('".$userId."', '', '".$firstName."', '".$lastName."', '".$email."', '".$email."' , 'System Admin','".$password."', '".$session_id."','')");
			if ($sql) {
				$sqlprimary = mysqli_query($conn,"SELECT * from users order by userId desc limit 1");
				$data = mysqli_fetch_array($sqlprimary);
				$_SESSION['session_id'] = $session_id;
				$_SESSION['userId'] = $data['userId'];
				echo 'success';
			}else{
				echo $conn->error;
			}

	}elseif ($_POST['type'] == 'userFrom') {

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = base64_encode(rand(0,1000));
		$session_id = date('m-d-Y') . ' - ' . base64_encode(rand(1,1000));

		$sql = mysqli_query($conn, "INSERT into users ( userAbove, firstName, lastName, username, email, type, session_id, password,electionId ) values ('".$_SESSION['userId']."', '".$firstName."', '".$lastName."', '".$email."', '".$email."','Standard User','".$session_id."', '".$password."','".$_SESSION['electionId']."')");
		if ($sql) {
			$msg = 'New user named '. $firstName . ' ' . $lastName . ' Created.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','')");
			echo 'success';
		}else{
			echo $conn->error;
		}

	}elseif ($_POST['type'] == 'election') {

		$schoolName = $_POST['schoolName'];
		$electionName = $_POST['schoolName']. ' Election (' . date('Y') . ')';
		$electionFor = $_POST['electionFor'];
		$elId = time() . rand(0,1000);
		$sesId = $_SESSION['userId'];

		$sql = mysqli_query($conn, "INSERT into election (electionId, schoolName, electionName, status, theme, userId, electionFor ) Values ('".$elId ."', '".$schoolName."','".$electionName."', 'In Progress', 'skin-green', '".$sesId."', '".$electionFor."')");
		$msg = 'Election named '. $electionName . ' Created.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','')");

		$sqlprimary = mysqli_query($conn, "SELECT * from election order by electionId desc limit 1");
		$data = mysqli_fetch_array($sqlprimary);
		if ($sql) {
			$_SESSION['electionId'] = $data['electionId'];
			$_SESSION['electionFor'] = $data['electionFor'];
			echo 'success';
		}else{
			echo $conn->error;
		}
	}elseif ($_POST['type'] == 'candidate') {

		$firstName = $_POST['firstName'];

		$middleName = $_POST['middleName'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$lastName = $_POST['lastName'];
		$url = $_POST['url'];
		$datepicker = $_POST['datepicker'];


		if (isset($_POST['partylist'])) { $partylist = $_POST['partylist']; }else{ $partylist = '';}
		if (isset($_POST['position'])) { $position = $_POST['position']; }else{ $position = '';}
		if (isset($_POST['yearLevel'])) { $yearLevel = $_POST['yearLevel']; }else{ $yearLevel = '';}
		if (isset($_POST['course'])) { $course = $_POST['course']; }else{ $course = '';}
		if (isset($_POST['major'])) { $major = $_POST['major']; }else{ $major = '';}
		if (isset($_POST['roomOrSection'])) { $roomOrSection = $_POST['roomOrSection']; }else{ $roomOrSection = '';}

		if (isset($_POST['GradeOrYear'])) { $GradeOrYear = $_POST['GradeOrYear']; }else{ $GradeOrYear = '';}
		if (isset($_POST['strand'])) { $strand = $_POST['strand']; }else{ $strand = '';}


		$sql = mysqli_query($conn, "INSERT into candidate (firstName,	lastName,	middleName,	facebookUrl,	age,	sex,	birthDate,	partyList,	position,	grade,	roomOrSection,	strand,	yearLevel,	course,	major,	userId,	electionId) values ('".$firstName."',	'".$lastName."',	'".$middleName."',	'".$url."', 	'".$age."', 	'".$sex."', 	'".$datepicker."',  	'".$partylist."', '".$position."', '".$GradeOrYear."', 	'".$roomOrSection."', '".$strand."', '".$yearLevel."', '".$course."', '".$major."', '".$_SESSION['userId']."', '".$_SESSION['electionId']."')");

		$msg = 'Candidate named '. $firstName . ' ' . $middleName . ' ' . $lastName . ' created.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");

		if ($sql) {
			echo 'success';
		}else{
			echo $conn->error;
		}

	}elseif ($_POST['type'] == 'student') {

		$firstName = $_POST['firstName'];
		$middleName = $_POST['middleName'];
		$lastName = $_POST['lastName'];
		$password = base64_encode(rand(0,1000));
		if (isset($_POST['yearLevel'])) {$yearLevel = $_POST['yearLevel'];}else{$yearLevel='';}
		if (isset($_POST['course'])) {$course = $_POST['course'];}else{$course='';}
		if (isset($_POST['major'])) {$major = $_POST['major'];}else{$major='';}
		if (isset($_POST['GradeOrYear'])) {$GradeOrYear = $_POST['GradeOrYear'];}else{$GradeOrYear='';}
		if (isset($_POST['roomOrSection'])) {$roomOrSection = $_POST['roomOrSection'];}else{$roomOrSection='';}
		if (isset($_POST['strand'])) {$strand = $_POST['strand'];}else{$strand='';}

		$sql = mysqli_query($conn, "INSERT into student ( firstName,	lastName,	middleName,	course,	yearlevel,	major,	strand,	grade,	roomorsection,	password,	electionId ) Values ('".$firstName."','".$lastName."','".$middleName."','".$course."','".$yearLevel."','".$major."','".$strand."','".$GradeOrYear."','".$roomOrSection."','".$password."','".$_SESSION['electionId']."')");

		$sqlPrimary = mysqli_query($conn,"SELECT * from student order by studentId desc limit 1");
		$data = mysqli_fetch_array($sqlPrimary);
		$userName = date('Y').'-'.$data['studentId'];
		$sqlSecondary = mysqli_query($conn, "UPDATE student set userName = '".$userName."' where studentId = '".$data['studentId']."'");
		if ($sqlSecondary) {
			$msg = 'Student named '. $firstName . ' ' . $middleName . ' ' . $lastName . ' created.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}else{
			echo $conn->error;
		}

	}elseif ($_POST['type'] == 'electionFrom') {
		$schoolName = $_POST['schoolName'];
		$electionName = $_POST['schoolName']. ' Election (' . date('Y') . ')';
		$electionFor = $_POST['electionFor'];

		$sql = mysqli_query($conn, "INSERT into election ( schoolName, electionName, status, theme, userId, electionFor ) Values ('".$schoolName."','".$electionName."', 'In Progress', 'skin-green', '".$_SESSION['userId']."', '".$electionFor."')");


		$msg = 'Election named '. $electionName . ' Created.';


		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','')");

		if ($sql) {

			echo 'success';
		}else{
			echo $conn->error;
		}
	}
