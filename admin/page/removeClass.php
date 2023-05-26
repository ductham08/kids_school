<?php
$idClass= isset($_GET['id']) ? $_GET['id'] : "";

$sqlRemoveClass = "DELETE FROM `class` WHERE id_class = $idClass";
$dataClass = executeQuery($sqlRemoveClass, false);

header("location: ?action=room");

?>