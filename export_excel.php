<?php
include("config.php");

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=attendance_report.xls");

echo "Student ID	Name	Date	Time	Status
";

$result = $conn->query("SELECT * FROM attendance");

while($row = $result->fetch_assoc()){
    echo $row['student_id']."	";
    echo $row['name']."	";
    echo $row['date']."	";
    echo $row['time']."	";
    echo $row['status']."
";
}
?>
