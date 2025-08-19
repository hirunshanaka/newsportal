<?php

// Database connection configuration and connection creation
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "newsportal";

// Create a connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<?php
// Include database connection and any necessary queries
//include('db_connection.php'); // Replace with the correct path

// Fetch news headlines and populate the $newsHeadlines array
$newsHeadlines = [];
$query = mysqli_query($con, "SELECT headline FROM news");

while ($row = mysqli_fetch_assoc($query)) {
    $newsHeadlines[] = $row['headline'];
}
?>
