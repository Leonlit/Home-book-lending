<?php
	include("conn.php");
	include("auth.php");
	
	$actions = $_GET["actions"];
	$item = $_GET["item"];
	
	$query = "DELETE FROM books WHERE id='$item';";
	$result = $conn->query($query);
	$conn->close();
?>