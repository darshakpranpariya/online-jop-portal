<?php
	$id = $_GET['id'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ojp');
  $q="select resume from user1 where id='$id'";
  $result=mysqli_query($con,$q);
  $row=mysqli_fetch_array($result);
  if(isset($row['type']))
  header("Content-Type:".$row['type']);
  echo $row['resume'];
  mysqli_close($con);
?>
