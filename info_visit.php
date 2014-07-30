<?php

	include("include/mylib.inc");
	$con = db_con();

	$y = date("y");
	$m = date("m");
	$d = date("d");
	$cdate = $y."/".$m."/".$d;

	$query = "select * from vtable where vdate='$cdate'";
	$result = mysql_query($query, $con);

	$row = mysql_fetch_array($result);
	$visit_count = $row[cnt];
	$visit_date = $row[vdate];

	echo "visit count : ".$visit_count."<br/>";
	echo "visit date : ".$visit_date."<br/>";

	mysql_close($con);

?>
