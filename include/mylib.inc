<?php

function db_con()
{
	$host="localhost";
	$user="root";
	$pwd="bitnami";

	$con = mysql_connect($host, $user, $pwd);
	if($con == 0) echo mysql_error();

	mysql_select_db('mydb', $con);
	return $con;	
}

function tbl_gen($con)
{
	$table_array = mysql_list_tables('mydb');
	$table_count = mysql_num_rows($table_array);
	
	for($i=0;$i < $table_count; $i++){
		if(mysql_tablename($table_array, $i) == "atable"){
			//echo "<script>alert('already exist')</script>";
			$exist = 1;
			break;
		}
	}
	if($exist != 1){
		$query = "create table atable(name varchar(10), adr varchar(70))";
		mysql_query($query, $con);
	}
}

?>
