<?php

	include("include/mylib.inc");
	$con = db_con();

	$query = "insert into mytable values ('hong', 'Inchon', '032', '3232', '(((')";
	$result = mysql_query($query, $con);

	echo "insert : ".$result;

	mysql_close($con);

?>
