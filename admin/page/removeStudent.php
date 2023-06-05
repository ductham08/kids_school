<?php
$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlStudent = "SELECT * FROM `students` join class ON students.id_class = class.id_class where id_student = $idStudent";
$dataStudent = executeQuery($sqlStudent, false);

$current_number = $dataStudent['current_number'] - 1;
$id_class = $dataStudent['id_class'];
    
$sqlUpdateClass = "UPDATE `class` SET `current_number` = $current_number WHERE id_class = $id_class";
executeQuery($sqlUpdateClass, false);

$sqlGetStudent = "DELETE FROM `students` WHERE id_student = $idStudent";
executeQuery($sqlGetStudent, false);

header("location: ?action");

?>