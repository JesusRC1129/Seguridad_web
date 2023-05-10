<?php
$servername = "localhost";
$database = "olimpica";
$username = "root";
$password = "mysql123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Conexion correcta ";
// mysqli_close($conn);
?>