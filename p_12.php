<!DOCTYPE html>
<html>
<head>
	<title>Login Validation</title>
</head>
<body>
<h2> Login</h2>
<div style="border: 1px solid black; border-radius: 10px;">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	<label>User Name : </label><br>
	<input type="text" name="uname" id="uname" required>
	<br><br>
	<label>Passcode : </label><br>
	<input type="text" name="pass" id="pass" required>
	<br><br>
	<input type="submit" value="Submit">
</form>
</div>

<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];

		/*Initially store some username and password by creating a file login.txt ex: Darshan,Darshan1234*/ 
		$f="login.txt";
		$users=file($f,FILE_IGNORE_NEW_LINES);

		$succlogin=false;
		foreach($users as $u){
			list($storeuname,$storepass)=explode(',',$u);
			if($uname==$storeuname && $pass==$storepass)
			{
				$succlogin=true;
				break;
			}
		}

		if($succlogin)
		{
			echo "<h3> Login Successful !! </h2>";
			echo "<p> Welcome $uname </p> ";
		}
		else{
			echo "<h2>Login Failed!</h2>";
            echo "<p>Invalid username or password.</p>";
		}
	}	
?>
</body>
</html>