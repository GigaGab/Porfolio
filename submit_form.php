<?php
$conn = new mysqli("localhost", "root", "", "dbweb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobile_number'];
    $github = $_POST['github'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (full_name, email, mobile_number, github, message) VALUES ('$fullName', '$email', '$mobileNumber', '$github', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
