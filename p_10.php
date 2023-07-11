<!DOCTYPE html>
<html>
<head>
	<title>Prime Check</title>
	<style>
		body{
			text-align: center;
		}
	</style>
</head>
<body>

<?php
	echo "DATE : <b>".date("d-m-Y")."</b><br>";
	echo "DAY : <b>".date("l")."</b><br>";
 ?>
<br><br><hr>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
	<label>Enter the number : </label>
	<input type="number" name="pnum" id="pnum" placeholder="Prime number" required>
	<br><br>
	<input type="submit" value="Check">
</form>

<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$num=$_POST["pnum"];
		if(isprime($num))
		{
			echo "<p> $num is a prime number.</p>";
		}
		else{
			echo "<p> $num is not a prime number.</p>";
		}
	}

	function isprime($num)
	{
		if($num<=1)
			return false;

		for($i=2;$i<=sqrt($num);$i++)
		{
			if($num % $i ==0)
			{
				return false;
			}
		}
		return true;
	}

?>

</body>
</html>