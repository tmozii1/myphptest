<?php

function db_con()
{
	$host="localhost";
	$user="root";
	$pwd="bitnami";

	$con = mysql_connect($host, $user, $pwd);
	if($con == 0) echo mysql_error();

	mysql_select_db('mydb', $con);
	return $con;	
}
?>
