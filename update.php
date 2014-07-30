<?php

	include("include/mylib.inc");
	$con = db_con();

	$query = "update mytable set test=')))' where name='hong'";
	$result = mysql_query($query, $con);

	echo "insert : ".$result;

	mysql_close($con);

?>
