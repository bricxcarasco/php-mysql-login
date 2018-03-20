<?php
include('../config/config.php');

if (isset($_REQUEST['getLoginInfo'])) {
	getLoginInfo();
}

function getLoginInfo() {
	global $link;

	$Username = $_REQUEST['Username'];
	$Password = $_REQUEST['Password'];

	$query = "SELECT * FROM login WHERE username= '$Username' AND password = '$Password'";
	$result = mysqli_query($link, $query);
	$rowcount = mysqli_num_rows($result);

	echo json_encode($rowcount);
}

?>
