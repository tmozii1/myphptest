<?php
	$host="localhost";
	$user="root";
	$pwd="bitnami";

	$con = mysql_connect($host, $user, $pwd);
	mysql_select_db('mydb', $con);
	
	echo $con;
	
	mysql_close($con);

?>
