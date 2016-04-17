<?php
$servername = "localhost";
$username = "notes";
$password = "Vanhalen22!";
$dbname = "notes";

$subject = $_POST['subject'];
$entry = $_POST['info'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$entry1 = $conn->real_escape_string($entry);

if ($conn->query("INSERT into entries (subject, entry) VALUES ('$subject','$entry1')")) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();
?>

<htmnl>
    <a href="https://notes.e-dev.us">Go back?</a>
</htmnl>
