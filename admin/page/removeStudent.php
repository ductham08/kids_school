<?php
$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetStudent = "DELETE FROM `students` WHERE id_student = $idStudent";
$dataStudent = executeQuery($sqlGetStudent, false);

header("location: ?action");

?>