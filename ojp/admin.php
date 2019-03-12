<?php
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'ojp');
  $q="select * from user1";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  echo $num;
  mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin request accept</title>
</head>
<body>
	<table>
		<tr>
			<th>username</th>
			<th>resume</th>
      <th>confirmation</th>
		</tr>
		<?php
   			 for($i=1;$i<=$num;$i++)
      		{
         		$row=mysqli_fetch_array($result);
            $k = $row['id'];
  		?>
  		<tr>
  			<td><?php echo $row['username'] ?></td>
  			<td><?php echo "<a target='_blank' href='show resume.php ? id=".$k."'>". $row['username']."</a>"?></td>
        <td><form action="confirm.php" method="get">
          <button name="id" value="<?php echo $k ?>">Done</button>
          
        </form></td>
  		</tr>
  		<?php
     		 }
  		?>
	</table>
</body>
</html>