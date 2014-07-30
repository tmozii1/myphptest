<?php

	include("include/mylib.inc");
	$con = db_con();

	$y = date("y");
	$m = date("m");
	$d = date("d");
	$cdate = $y."/".$m."/".$d;

	$count = 1;
	$query = "insert into vtable(cnt, vdate) values ($count, '$cdate')";
	mysql_query($query, $con);

	mysql_close($con);

?>
