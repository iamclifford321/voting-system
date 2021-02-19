<?php
	include 'session.php';
	include 'config.php';
	if ( $_POST['type'] == 'password' ) {
		$password = md5($_POST['passwordOld']);
		$sql = mysqli_query($conn, "SELECT * from users where password = '".$password."' and userId = '".$_SESSION['userId']."'");
		$rows = mysqli_num_rows($sql);

		echo $rows;

	}