<?php
$username = $_POST['username'];
$password = $_POST['password'];

//database connection
$con = new mysqli("localhost", "root", "", "webproject");

if($con->connect_error) {
    die("failed to connect : " .$con->connect_error);
} else {
    $stmt = $con->prepare("select * from users where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo "<h2>login successfully</h2>";
        }else {
            echo "<h2>INVALID USER OR PASS</H2>";
        }
    }else {
        echo "<h2>INVALID USER OR PASS</H2>";
    }
}
?>