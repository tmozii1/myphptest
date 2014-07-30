<?php

	include("include/mylib.inc");
	$con = db_con();

	$qry1 = "select * from mytable";
	$res1 = mysql_query($qry1, $con);

	$num1 = mysql_num_rows($res1);

	for($i=0;$i<$num1;$i++){
		$arr = mysql_fetch_array($res1);
		echo $i." : ".$arr[0]."<br/>";
	}

	mysql_close($con);

?>
