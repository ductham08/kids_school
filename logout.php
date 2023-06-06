<?php

session_start();

session_unset();
session_encode();

header('location: ./index.php');

?>