<?php
session_start();
include('../config.php');
if(!isset($_SESSION['admin'])){
    header("Location: ../index.php");
}

$result = $conn->query("SELECT * FROM attendance");
?>

<h2>Attendance Records</h2>
<a href="../export_excel.php"><button>Export to Excel</button></a><br><br>

<?php
while($row = $result->fetch_assoc()){
    echo $row['student_id']." - ".$row['name']." - ".$row['date']." - ".$row['time']." - ".$row['status']."<br>";
}
?>
