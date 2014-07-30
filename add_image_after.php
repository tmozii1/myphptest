<?php

if ($_FILES["file1"]["error"] > 0) {
  echo "Error: " . $_FILES["file1"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file1"]["name"] . "<br>";
  echo "Type: " . $_FILES["file1"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file1"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file1"]["tmp_name"];

  move_uploaded_file($_FILES["file1"]["tmp_name"], "upload/".$_FILES["file1"]["name"]);
}

	$file1 = $HTTP_POST_FILES[file1][tmp_name];
	$file_name1 = $HTTP_POST_FILES[file1][name];

$file1 = $_FILE[file1][tmp_name];
$file_name1 = $_FILE[file1][name];
	echo "file : $file1<br/>filename : $filename1";	
	echo "aaa".$file1;
?>

