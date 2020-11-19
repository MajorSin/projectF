<?php
class UsernameCounter {
	function __construct(){
		include('../connection.php');
		$sqlUsernameCounter = "SELECT count(*) FROM users"; 
		$resultUsernameCounter = $dbh->prepare($sqlUsernameCounter); 
		$resultUsernameCounter->execute(); 
		$numberUsername = $resultUsernameCounter->fetchColumn(); 
		echo $numberUsername;
	}
}
$callUsernameCounter = new UsernameCounter();
echo $callUsernameCounter;
?>