<?php
 include 'config.php';
 include 'session.php';
 $id = $_POST['id'];
 if ($_POST['type'] == 'candidate') {
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$age = $_POST['age'];
	$sex = $_POST['sex'];
	$lastName = $_POST['lastName'];
	$facebookUrl = $_POST['url'];
	$birthDate = $_POST['datepicker'];
	$partyList = $_POST['partylist'];
	$position = $_POST['position'];
	//
	if (isset($_POST['yearLevel'])) { $yearLevel = $_POST['yearLevel']; }else{ $yearLevel = null; }
	if (isset($_POST['course'])) { $course = $_POST['course']; }else{ $course = null; }
	if (isset($_POST['major'])) { $major = $_POST['major']; }else{ $major = null; }
	if (isset($_POST['strand'])) { $strand = $_POST['strand']; }else{ $strand = null; }
	if (isset($_POST['GradeOrYear'])) { $GradeOrYear = $_POST['GradeOrYear']; }else{ $GradeOrYear = null; }
	if (isset($_POST['roomOrSection'])) { $roomOrSection = $_POST['roomOrSection']; }else{ $roomOrSection = null; }
	//	
	$sql = mysqli_query($conn, "UPDATE 
									 	candidate 
									 	set
									 	
									 		 firstName = '". $firstName ."',
									 		 lastName = '". $lastName ."',
									 		 middleName = '". $middleName ."',
									 		 facebookUrl = '". $facebookUrl ."',
									 		 age = '". $age ."',
									 		 sex = '". $sex ."',
									 		 birthDate = '". $birthDate ."',
									 		 partyList = '". $partyList ."',
									 		 position = '". $position ."',
									 		 grade = '". $GradeOrYear ."',
									 		 roomOrSection = '". $roomOrSection."',
									 		 strand = '". $strand ."',
									 		 yearLevel = '". $yearLevel ."',
									 		 course = '". $course ."',
									 		 major = '". $major ."'
									 	where 
									 	candidateId = '$id'
						");
	if ($sql) {

		$msg = 'Candidate '. $firstName . ' ' . $middleName . ' ' . $lastName . ' details are  updated.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
		echo 'success';
	}
}elseif ( $_POST['type'] == 'student' ) {

	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];

	$lastName = $_POST['lastName'];
	//
	if (isset($_POST['yearLevel'])) { $yearLevel = $_POST['yearLevel']; }else{ $yearLevel = null; }
	if (isset($_POST['course'])) { $course = $_POST['course']; }else{ $course = null; }
	if (isset($_POST['major'])) { $major = $_POST['major']; }else{ $major = null; }
	if (isset($_POST['strand'])) { $strand = $_POST['strand']; }else{ $strand = null; }
	if (isset($_POST['GradeOrYear'])) { $GradeOrYear = $_POST['GradeOrYear']; }else{ $GradeOrYear = null; }
	if (isset($_POST['roomOrSection'])) { $roomOrSection = $_POST['roomOrSection']; }else{ $roomOrSection = null; }

	$sql = mysqli_query($conn, "UPDATE
									student
										set								
											firstName = '". $firstName ."',
											lastName = '".$lastName."',
											middleName = '".$middleName."',
											course = '".$course."',
											yearlevel = '".$yearLevel."',
											major = '".$major."', 
											strand = '".$strand."', 
											grade = '".$GradeOrYear."',
											roomorsection = '".$roomOrSection."'
										where
											studentId = '".$id."'								
											");
	if ($sql) {
		$msg = 'Student '. $firstName . ' ' . $middleName . ' ' . $lastName . ' details are updated.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
		echo 'success';
	}else{
		echo $conn->error;
	}
	
}elseif ($_POST['type'] == 'election') {
	$schoolNameEdit = $_POST['schoolNameEdit'];
	$electionForEdit = $_POST['electionForEdit'];
	$electionName = $_POST['schoolNameEdit'] . ' Election (' . date('Y') . ')';
	$sql = mysqli_query($conn, "UPDATE election set schoolName = '".$schoolNameEdit."', electionName = '".$electionName."', electionFor = '".$electionForEdit."' where electionId = '".$id."'");
	if ($sql) {
		$msg = 'Election '. $electionName . ' details are updated.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
		echo 'success';
	}else{
		echo $conn->error;
	}
}elseif ( $_POST['type'] == 'user' ) {
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$userName = $_POST['userName'];

	$sql = mysqli_query($conn, "UPDATE users set firstName = '".$firstName."' , lastName = '".$lastName."' , email = '".$email."' , username = '".$userName."' where userId = '".$_SESSION['userId']."'");
	if ($sql) {
		$msg = 'User '. $firstName . ' ' . $lastName . ' details are updated.';
		$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId) Values ('".$msg."', '".$_SESSION['userId']."')");
		echo 'success';
	}else{
		echo $conn->error;
	}
}elseif ($_POST['type'] == 'userPass') {
	$passwordNew = md5($_POST['passwordNew']);
	$sql = mysqli_query($conn, "UPDATE users set password = '".$passwordNew."' where userId = '".$_SESSION['userId']."'");


	if ($sql) {
		echo 'success';
	}else{
		echo $conn->error;
	}
}elseif ($_POST['type'] == 'theme') {
	$ThemeName = 'skin-' . $_POST['ThemeName'];

	$sql = mysqli_query($conn, "UPDATE election set theme = '".$ThemeName."' where electionId = '".$id."'");
	if ($sql) {
		echo 'success';
	}else{
		echo $conn->error;
	}

}