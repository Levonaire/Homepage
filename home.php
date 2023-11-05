<!DOCTYPE html>
<html>
<head>
<title>PHP & MySQL CRUD Example</title>

</head>
<body>
<h1>CRUD Example</h1>

<?php
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "webproject";
// Connect to MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

// Display records
$sql = "SELECT * FROM mytable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>" . $row["id"] . "</td>";
echo "<td>" . $row["username"] . "</td>";
echo "<td>" . $row["password"] . "</td>";
echo "<td>" . $row["email"] . "</td>";
echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" .
$row["id"] . "'>Delete</a></td>";
echo "</tr>";

}

echo "</table>";
} else {
echo "No records found.";
}

mysqli_close($conn);
?>

<br>
<a href="add.php">Add Record</a>
</body>
</html>