<?php

	include("include/mylib.inc");
	$con = db_con();

	$qry1 = "select * from mytable";
	$res1 = mysql_query($qry1, $con);

	$num1 = mysql_num_rows($res1);
	echo $num1;

	mysql_close($con);

?>
