<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
}
?>
<h2>Admin Dashboard</h2>
<a href="add_student.php">Add Student</a><br>
<a href="view_attendance.php">View Attendance</a><br>
<a href="../scan.php">Open QR Scanner</a><br><br>
<a href="../logout.php">Logout</a>
