<?php
include 'connect.php';

$extract_search = $_GET['extract_search'];

echo $subject_search;

$sql = "select * from entries where subject like '$extract_search'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // return data
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Date: " . $row["time"]. " - Subject: " . $row["subject"]. " - Entry: " . $row["entry"]. "<br><br><br>";
    }
} else {
    echo "Nothing here!";
}

include_once 'close.php';
?>