<?php
$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetStudent = "DELETE FROM `shiftClass` WHERE idShift = $idStudent";
executeQuery($sqlGetStudent, false);

header("location: ?action=shift");

?>