<?php
$servername = "172.30.240.10";
$database = "bd_mapr";
$username = "sistemas";
$password = "M@cha1206";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>