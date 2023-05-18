<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "!Anand123";
$dbname = "movie";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $feedback = $_POST["feedback"];

    // Insert the data into the database
    $sql = "INSERT INTO surveys (name, age, feedback) VALUES ('$name', '$age', '$feedback')";
    if ($conn->query($sql) === TRUE) {
        echo "Survey data submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

