<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="look/ss.css">
</head>
<body>
	<script type="text/javascript">
		 function checkPassword(str)
		  {
		    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
		    return re.test(str);
		  }
		  function checkForm(form)
		  {
		    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
		      if(!checkPassword(form.pwd1.value)) {
		        alert("The password you have entered is not valid!");
		        form.pwd1.focus();
		        return false;
		      }
		    } else {
		      alert("Error: Please check that you've entered and confirmed your password!");
		      form.pwd1.focus();
		      return false;
		    }
		    return true;
		  }

	</script>
	<div class="signup-box">
		<h1>Register Here</h1>
		<form action="signuphandling.php" method="post" enctype="multipart/form-data">
			<p>UserName</p>
			<input type="text" name="username" placeholder="Enter UserName" required>
			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Your Email Address" required>
			<p>Create Password</p>
			<input type="password" id="pwd1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
			<p>Re-Enter PassWord</p>
			<input type="password" id="pwd2" placeholder="Re-Enter Your PassWord" required>
			<p>Mobile Number</p>
			<input type="tel" name="mn" placeholder="Enter Your Mobile Number" required>
			<p>Current Location</p>
			<input type="text" name="cl" placeholder="Enter Your Current Location" required>
			<p>Upload Resume</p>
			<input type="file" name="resume" required>
			<p><input type="checkbox" name="checkbox" required>I agreed to the Terms & Privacy governing the use of Online Job Portal</p>
			<input type="submit" value="Register">
		</form>
	</div>

</body>
</html>