<?

	session_start(); //відкриття або продовження сесії
	echo "index.php<br>";
	$_SESSION["name"] = "Test";

	echo $_SESSION["name"]."<br>";
	//print_r($_SESSION);
	$_SESSION["page"] .= $_SERVER["PHP_SELF"]." ".date("d-m-Y H:i:s")."<br>";
	echo $_SESSION["page"]."<br>";
	echo "<a href='index2.php'>Далі ...</a>";
?>