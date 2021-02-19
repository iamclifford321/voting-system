<?php
	include 'config.php';
	include 'session.php';
	$id = $_POST['id'];
	if ($_POST['toBeDeleted'] == 'candidate') {
		$primarysql = mysqli_query($conn, "SELECT * from candidate where candidateId = '$id'");
		$data = mysqli_fetch_array($primarysql);

		$sql = mysqli_query($conn,"DELETE from candidate where candidateId = '$id'");
		if ($sql) {

			$msg = 'Candidate '. $data['firstName'] . ' ' . $data['middleName'] . ' ' . $data['lastName'] . ' DELETED SUCCESSFULLY.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");

			echo 'success';
		}
	}elseif ( $_POST['toBeDeleted'] == 'student' ) {
		$primarysql = mysqli_query($conn, "SELECT * from student where studentId = '$id'");
		$data = mysqli_fetch_array($primarysql);
		$sql = mysqli_query($conn,"DELETE from student where studentId = '$id'");
		if ($sql) {
			$msg = 'Student '. $data['firstName'] . ' ' . $data['middleName'] . ' ' . $data['lastName'] . ' DELETED SUCCESSFULLY.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}	
	}elseif ( $_POST['toBeDeleted'] == 'election' ) {
		$primarysql = mysqli_query($conn, "SELECT * from election where electionId = '$id'");
		$data = mysqli_fetch_array($primarysql);

		$sql1 = mysqli_query($conn,"DELETE from student where electionId = '".$id."'");

		$sql2 = mysqli_query($conn,"DELETE from candidate where electionId = '".$id."'");

		$sql3 = mysqli_query($conn,"DELETE from course where electionId = '".$id."'");

		$sql4 = mysqli_query($conn,"DELETE from election where electionId = '".$id."'");

		$sql5 = mysqli_query($conn,"DELETE from major where electionId = '".$id."'");

		$sql6 = mysqli_query($conn,"DELETE from partylist where electionId = '".$id."'");

		$sql7 = mysqli_query($conn,"DELETE from position where electionId = '".$id."'");

		$sql8 = mysqli_query($conn,"DELETE from roomorsection where electionId = '".$id."'");

		$sql9 = mysqli_query($conn,"DELETE from yearlevel where electionId = '".$id."'");

		if ($sql1 && $sql2 && $sql3 && $sql4 && $sql5 && $sql6 && $sql7 && $sql8 && $sql9) {

			$msg = 'Election '. $data['electionName'] . ' DELETED SUCCESSFULLY all data under this election ALSO DELETED.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");

			echo 'success';
		}else{
			echo $sql1 .' && '. $sql2->error .' && '. $sql3->error .' && '. $sql4->error .' && '. $sql5->error .' && '. $sql6->error .' && '. $sql7->error .' && '. $sql8->error .' && '. $sql9->error ;
		}
	}elseif ($_POST['toBeDeleted'] == 'user'){
		$primarysql = mysqli_query($conn, "SELECT * from users where userId = '".$id."'");
		$data = mysqli_fetch_array($primarysql);

		$sql = mysqli_query($conn, "DELETE from users where userId = '$id'");
		if ($sql) {
			$msg = 'User '. $data['firstName'] . ' ' . $data['lastName'] . ' DELETED SUCCESSFULLY.';
			$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','".$_SESSION['electionId']."')");
			echo 'success';
		}else{
			echo $conn->error;
		}
		
	}
