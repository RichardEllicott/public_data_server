<?php
include 'database_credentials.php'; // load passwords for database


try
{
	$conn = new mysqli($servername, $username, $password, $dbname);
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