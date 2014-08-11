<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
</head>
<body>
 
<div id="accordion">

<?php

  include("include/mylib_brain.inc");
  $con = db_con();

  $qry1 = "select name, sex, birth, sdate, img_path, login_count from user";
  $res1 = mysql_query($qry1, $con);

  $num1 = mysql_num_rows($res1);
  $field_count = mysql_num_fields($res1);

  for($i=0;$i<$num1;$i++){
    $arr = mysql_fetch_array($res1);
    echo "<h3>".$arr[0]."</h3>"
    echo "<div>\n<p>"
    echo "성별 : ".$arr[1]."<br/>"
    echo "생일 : ".$arr[2]."<br/>"
    echo "시작일 : ".$arr[3]."<br/>"
    echo "이미지 : ".$arr[4]."<br/>"
    echo "로그인 횟수 : ".$arr[5]."<br/>"
    echo "</p>\n</div>"
  }
  mysql_close($con);

?>

</div>
 
 
</body>
</html>