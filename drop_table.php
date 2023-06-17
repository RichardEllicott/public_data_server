<?php

// WARNING THIS FILE DELETES THE TABLE!
// don't upload if you don't want this... you need to drop a table somehow though if you want to change the data types

include 'database_credentials.php'; // load passwords for database


echo "Dropping database table...<br>";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DROP TABLE users";

    $conn->exec($sql);
	echo "dropped table...<br>";
	
}
catch(PDOException $e)
{
    echo $sql . "
" . $e->getMessage();
}

$conn = null;
?>