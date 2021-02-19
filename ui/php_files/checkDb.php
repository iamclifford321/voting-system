<?php
	include 'config.php';
	$sql = mysqli_query($conn,"SELECT * from users");
	$rows = mysqli_num_rows($sql);