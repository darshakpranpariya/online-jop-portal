<?php
	session_start();
	$password='';
	$username=$_POST['username'];
	if(isset($_POST['unlock']))
 		$password=$_POST['unlock'];
	$conn=mysqli_connect('localhost', 'root');
	mysqli_select_db($conn,'ojp');

	$q = "select * from user2 where (username='$username' && password='$password')";
	$result = mysqli_query($conn,$q);
	$row = mysqli_num_rows($result);
	
	if($row==1){
		echo "login successful";
	}
	else{
	$q1 = "select * from user1 where (username='$username')";
	$result1= mysqli_query($conn,$q1);
	$row1 = mysqli_num_rows($result1);
	if($row1==1)
		echo "Your account activation is pending";
	else
		echo "You need to signup first";
	}
	mysqli_close($conn);
?>