<?php
	include 'config.php';
	if ($_POST['type'] == 'user') {
		$userLog = $_POST['userLog'];
		$passwordLog = md5($_POST['passwordLog']);

		$sql = mysqli_query($conn,"SELECT * from users where username = '".$userLog."'");
		$rows = mysqli_num_rows($sql);
		$data = mysqli_fetch_array($sql);
		if ($rows >= 1) {
			if ($data['type'] == 'Standard User') {
				if ($data['password'] == $_POST['passwordLog'] ) {
					session_start();
					$_SESSION['userId'] = $data['userId'];
					$_SESSION['session_id'] = $data['session_id'];
					$_SESSION['electionId'] = $data['electionId'];
					$msg =  $data['type'] . ' | ' . $data['firstName'] . ' ' . $data['lastName'] . ' logged in on the system.';
					$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','')");
					echo 'successSta';
				}else{
					echo 'password';
				}
			}else{
		
				if ($data['password'] == $passwordLog ) {
					session_start();
					$_SESSION['userId'] = $data['userId'];
					$_SESSION['session_id'] = $data['session_id'];
					$msg =  $data['type'] . ' | ' . $data['firstName'] . ' ' . $data['lastName'] . ' logged in on the system.';
					$sqlHistory = mysqli_query($conn, "INSERT into logs (msg,userId,electionId) Values ('".$msg."', '".$_SESSION['userId']."','')");
					echo 'success';
				}else{
					echo 'password';
				}
			}

		}else{
			echo 'username';
		}
	}
	