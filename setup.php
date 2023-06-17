<?php
include 'database_credentials.php'; // load passwords for database

echo "creating database table...<br>";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allows exceptions

 
    
    $sql = "CREATE TABLE users (
            name VARCHAR(32) NOT NULL PRIMARY KEY,
            data VARCHAR(1024),
            created_time INT(6) UNSIGNED
            )";

    $conn->exec($sql);
	echo "<br><br><br>PSL was set up successfully<br>";
	echo "You can now add a new score with ";
	echo '<a href="https://' . $_SERVER['HTTP_HOST'] . '/addScore.php?name=username&score=100">https://' . $_SERVER['HTTP_HOST'] . '/addScore.php?name=username&score=100</a>';;
	
	echo "<br>and get the scores with ";
	echo '<a href="https://' . $_SERVER['HTTP_HOST'] . '/getScore.php">https://' . $_SERVER['HTTP_HOST'] . '/getScore.php</a>';;
}
catch(PDOException $e)
{
    echo $sql . "
" . $e->getMessage();
}

$conn = null;
?>