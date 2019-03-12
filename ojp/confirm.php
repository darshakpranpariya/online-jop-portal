<?php
	$id = $_GET['id'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ojp');
  $q="insert into user2 select * from user1 where id='$id'";
  $result=mysqli_query($con,$q);
  if($result=1)
  	echo "Inserted";
  else
  	echo "not Inserted";

?>