<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];

    $sql = "INSERT INTO your_table_name (content) VALUES ('$content')"; // Replace with your actual table name and column names

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
