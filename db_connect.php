<?php
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn) {
    echo "Database is Connected";
} else {
    echo "Error: " . $conn->connect_error;
}
// Select all date
$query = $conn->query("SELECT * FROM students");
$data = $query->fetch_all(MYSQLI_ASSOC);
echo"<br>";
echo"<br>";
echo"<Data in attendance table>";
foreach ($data as $row) {
    echo"<br>";
    echo"<br>";
    echo $row['student_id']."<br>";
    echo $row['name'], "<br>";
}
?>