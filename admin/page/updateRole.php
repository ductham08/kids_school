<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";
$role = isset($_GET['role']) ? $_GET['role'] : "";

$sqlGetStudent = "UPDATE `users` SET `role`= $role WHERE id = $id";
executeQuery($sqlGetStudent, false);

header("location: ?action=users");

?>