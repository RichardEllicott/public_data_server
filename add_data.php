<?php
include 'database_credentials.php'; // load passwords for database


try
{
    $conn = new PDO("mysql:host=$db_servername;dbname=$db_name",$db_username,$db_password);
	
	// INSERT will only work once i think
	// $statement = $conn->prepare("INSERT INTO leaderboard (name, score) VALUES (?, ?)");

	$statement = $conn->prepare("REPLACE INTO users (name, password, data, created_time) VALUES (?, ?, ?, ?)"); # REPLACE INTO will replace matching primary key entries, easiest way to allow the record to be updated

	$statement->execute(array($_GET['name'], $_GET['password'],    $_GET['data'] , time()       ));
	// $statement->execute(array($_GET['name'], $_GET['data'] , "1");

	
	echo "data updated!";
}
catch(PDOException $e)
{
    echo $statement . "
" . $e->getMessage();
}

$conn = null;
?>