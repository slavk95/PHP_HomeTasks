<?
	
	if (isset($_POST["Ok"])) {
		setcookie("myCookie",1);
	}
	if (isset($_POST["exit"])) {
		setcookie("myCookie","");
		unset($_POST["Ok"]);
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home task 3</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	
		<form action="" method="POST">
			<label for="login">Login</label><br>
			<input id="login" required="required" type="text" name="login"><br>
			<label for="password">Password</label><br>
			<input id="password" required="required" type="password" name="password"><br>
			<label for="email">Email</label><br>
			<input id="email" required="required" type="email" name="email"><br>
			<input type="submit" name="Ok" value="Ok">
		</form>
		<form action="" method="POST">
			<input id="delete" type="submit" name="exit" value="Delete coockie">
		</form>
			
	</body>
</html>
<?
	if (isset($_POST["Ok"])) {
		echo "<script type='text/javascript'>
			var deleteCookie = document.getElementById('delete');
			deleteCookie.style.display = 'block';
		</script>";
	}
?>