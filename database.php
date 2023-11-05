<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
        die("All fields are required");
    }
    
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "webproject";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";


    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in preparing the SQL statement: " . $conn->error);
    }

    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $stmt->bind_param("sss", $username, $password, $email);

   
    if ($stmt->execute()) {
        
        header("Location: login.php");
        exit; 
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>