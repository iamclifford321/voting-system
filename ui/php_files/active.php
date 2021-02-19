<?php
$page = "pages/" . $_GET['q'] . ".php";
if ( $_GET['q'] == 'students' ) {
	$students = 'active';
		
}elseif ( $_GET['q'] == 'candidates' ) {
	$candidates = 'active';
	
}elseif( $_GET['q'] == 'overall' ){
	$overall = 'active';
			
}
// more
elseif ( $_GET['q'] == 'election' ) {
	$more = 'active';
	$election = 'active';
}elseif ( $_GET['q'] == 'user' ) {
	$more = 'active';
	$user = 'active';
}elseif ( $_GET['q'] == 'logs' ) {
	$more = 'active';
	$logs = 'active';
}elseif ( $_GET['q'] == 'theme' ) {
	$more = 'active';
	$theme = 'active';
}elseif ( $_GET['q'] == 'profile' ) {
	
}elseif ( $_GET['q'] == 'theme' ) {
	
}else{
	$overall = 'active';
	$page = "pages/overall.php";
}