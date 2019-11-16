<?php 
	$con = mysqli_connect('localhost','root','','hello');

	if (!$con) {
		echo "connection fail:" .mysqli_connect_error();
	}
?>