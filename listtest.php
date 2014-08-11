<?php

  include("include/mylib_brain.inc");
  $con = db_con();

  $qry1 = "select name, sex, birth, sdate, img_path, login_count from user";
  $res1 = mysql_query($qry1, $con);

  $num1 = mysql_num_rows($res1);
  $field_count = mysql_num_fields($res1);

  for($i=0;$i<$num1;$i++){
    $arr = mysql_fetch_array($res1);
    echo "<h3>".$arr[0]."</h3>\n";
    echo "<div>\n<p>\n";
    echo "성별 : ".$arr[1]."<br/>\n";
    echo "생일 : ".$arr[2]."<br/>\n";
    echo "시작일 : ".$arr[3]."<br/>\n";
    echo "이미지 : ".$arr[4]."<br/>\n";
    echo "로그인 횟수 : ".$arr[5]."<br/>\n";
    echo "</p>\n</div>\n";
  }
  mysql_close($con);

?>
