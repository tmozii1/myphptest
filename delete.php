<?php

	include("include/mylib.inc");
	$con = db_con();

	$query = "delete from mytable where name='hong'";
	$result = mysql_query($query, $con);

	echo "insert : ".$result;

	mysql_close($con);

?>
