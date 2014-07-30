<html>
	<head>
		<?php
			include("include/mylib.inc");
			$con = db_con();
			$exist = 0;
			if(!$exist) tbl_gen($con);	
		?>
	</head>

	<body>
		<p> input user info</p>
		<form name=form1 method=post action="join_db.php">
			name : <input type="text" size=10 name='name'><p>
			address : <input type="text" size=20 name='adr'><p>
			<input type="submit" value='input'>
		</form>
	</body>
</html>
