<?php
session_start();
include('../config.php');
if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
}

if(isset($_POST['submit'])){
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $section = $_POST['section'];
    $qr_data = $student_id;

    $sql = "INSERT INTO students (student_id, name, section, qr_code)
            VALUES ('$student_id', '$name', '$section', '$qr_data')";
    $conn->query($sql);
    echo "Student Added Successfully!";
}
?>

<form method="POST">
<h2>Add Student</h2>
<input type="text" name="student_id" placeholder="Student ID" required><br><br>
<input type="text" name="name" placeholder="Name" required><br><br>
<input type="text" name="section" placeholder="Section" required><br><br>
<button name="submit">Add Student</button>
</form>
