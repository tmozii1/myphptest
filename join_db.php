<?php

	include("include/mylib.inc");
	$con = db_con();
	
	$name = $_POST['name'];
	$adr = $_POST['adr'];

	$query_insert = "insert into atable(name, adr) values('$name', '$adr')";
	mysql_query($query_insert, $con);

	$query_select = "select * from atable";
	$result = mysql_query($query_select, $con);
	
	$num = mysql_num_rows($result);
	$fnum = mysql_num_fields($result);
?>

<table width=200 border=1>
<?php
	for($i=0;$i < $num; $i++){
		echo "<tr>";
		for($j=0;$j<$fnum;$j++){
			$d = mysql_result($result, $i, $j);
			echo "<td>&nbsp;$d</td>";
		}
		echo "</tr>";
	}

	echo "user count : {$num}";
	mysql_close($con);
?>
</table>
