<?
	session_start();
	echo "index2.php<br>";
	echo $_SESSION["name"]."<br>";
	//echo session_id()."<br>";
	//echo session_name()."<br>";
	$_SESSION["page"] .= $_SERVER["PHP_SELF"]." ".date("d-m-Y H:i:s")."<br>";
	echo $_SESSION["page"]."<br>";
	echo "<a href='index.php'>Далі ...</a>";
	
?>