<!DOCTYPE html>
<html>
<head>
	<title>Form PHP</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label>Enter the text : </label><BR>
<textarea rows="6" cols="60" name="mes" required></textarea>
<br><br>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>

<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$m=$_POST["mes"];
		$f="form_data.txt";
		file_put_contents($f,$m,FILE_APPEND | LOCK_EX);
		echo "<h2>Form Data </h2>";
		echo "<p>Message  : $m </p>";
	}
?>
</body>
</html>