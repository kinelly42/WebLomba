<?php
include "config.php";

// Memeriksa apakah formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari formulir
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = $_POST["message"];

    // Menyiapkan dan menjalankan pernyataan SQL
    $sql = "INSERT INTO feedback (email, password, message) VALUES ('$email', '$password', '$message')";
    if ($conn->query($sql) === true) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
