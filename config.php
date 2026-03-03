<?php
$conn = new mysqli("localhost", "root", "", "qr_classroom");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
