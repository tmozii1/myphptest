<?php

	include("include/mylib.inc");
	$con = db_con();

	echo $con;

	mysql_close($con);

?>
