<?php

	include("include/mylib.inc");
	$con = db_con();

	$qry1 = "select * from mytable";
	$res1 = mysql_query($qry1, $con);

	$num1 = mysql_num_rows($res1);
	$field_count = mysql_num_fields($res1);

	echo "field count : ".$field_count."<br/>";

	for($i=0;$i<$num1;$i++){
		$arr = mysql_fetch_array($res1);
		for($j=0;$j<$field_count;$j++){
			echo $arr[$j];
			if($j < $field_count-1){
				echo ", ";
			}
		}
		echo "<br/>";
	}
	mysql_close($con);

?>
