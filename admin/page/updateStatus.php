<?php
$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetStudent = "UPDATE `students` SET `tuition_status`= 1 WHERE student_code = '$idStudent'";
$dataStudent = executeQuery($sqlGetStudent, false);

header("location: ?action=students");

?>