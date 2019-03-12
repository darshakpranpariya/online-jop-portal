<?php
	session_start();
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mn=$_POST['mn'];
	$cl=$_POST['cl'];
	$resume='';
	if(!empty($_FILES['resume']['tmp_name']) 
     && file_exists($_FILES['resume']['tmp_name'])) {
    	$resume= file_get_contents($_FILES['resume']['tmp_name']);
    	$type = $_FILES['resume']['type'];
	}
	$conn=mysqli_connect('localhost', 'root');
	mysqli_select_db($conn,'ojp');
	ini_set('memory_limit', '-1');
	$q="INSERT INTO user1 (username, email, password, mn, cl, resume,type, id) VALUES ('$username', '$email', '$password', '$mn', '$cl','$resume','$type' ,NULL)";
	$result = mysqli_query($conn,$q);
	// $q1 = "insert into user1 (resume) VALUES ('$'
	echo $result;
	if($result==1)
		echo "Inserted successfully";
	else
		echo "Not Inserted";
	mysqli_close($conn);
?>

