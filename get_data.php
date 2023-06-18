<?php
include 'database_credentials.php'; // load passwords for database


try
{
	$conn = new mysqli($db_servername, $db_username, $db_password, $db_name); // NOTE THIS SCRIPT USES DIFFERENT ONE TO DOWNLOAD!
    // $conn = new PDO("mysql:host=$db_servername;dbname=$db_name",$db_username,$db_password);


	$sql = "SELECT name, data, created_time FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)

	
	{
		while($row = $result->fetch_assoc())
		{
			// echo "Name: " . $row["name"]. " - Score: " . $row["data"]. "<br>";
			echo strip_tags($row["data"]) . "<br>" . $row["created_time"] . "<br>"; # added strip tags to prevent tags breaking output
		}
	} else
	{
		echo "There are no scores in the database";
	}
	
	$conn->close();
}
catch(PDOException $e)
{
    echo $statement . "
" . $e->getMessage();
}
$conn = null;
?>