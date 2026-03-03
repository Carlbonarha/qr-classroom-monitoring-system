<?php
include('config.php');

if(isset($_GET['student_id'])){
    $student_id = $_GET['student_id'];
    $date = date("Y-m-d");
    $time = date("H:i:s");

    $result = $conn->query("SELECT * FROM students WHERE student_id='$student_id'");
    $student = $result->fetch_assoc();
    $name = $student['name'];

    $check = $conn->query("SELECT * FROM attendance 
                           WHERE student_id='$student_id' 
                           AND date='$date'");

    if($check->num_rows > 0){
        echo "Attendance already recorded today!";
    } else {
        $conn->query("INSERT INTO attendance (student_id, name, date, time, status)
                      VALUES ('$student_id', '$name', '$date', '$time', 'Present')");
        echo "Attendance Recorded Successfully!";
    }
}
?>
