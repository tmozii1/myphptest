<?php

	include("include/mylib.inc");
	$con = db_con();

	$y = date("y");
	$m = date("m");
	$d = date("d");
	$cdate = $y."/".$m."/".$d;

	$query = "select * from vtable where vdate='$cdate'";
	$result = mysql_query($query, $con);


	if(!$result){
		$count = 0;
	}else{
		$array = mysql_fetch_array($result);
		$count = $array[cnt];
	}

	++$count;
	if($count == 1){
		$query2 = "insert into vtable(cnt, vdate) values($count, '$cdate')";	
	}else{
		$query2 = "update vtable set cnt=$count where vdate='$cdate'";
	}

	$result2 = mysql_query($query2, $con);


	$result = mysql_query($query, $con);
	$row = mysql_fetch_array($result);
	$visit_count = $row[cnt];
	echo "visit today : ".$visit_count."<br/>";

	$query_sum = "select sum(cnt) from vtable";

	$result_sum = mysql_query($query_sum, $con);
        $row_sum = mysql_fetch_array($result_sum);
        $sum = $row_sum[0];

        echo "visit total : ".$sum."<br/>";

	mysql_close($con);

?>
