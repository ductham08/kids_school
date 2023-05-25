<?php
require_once("../database/config.php");


$action = empty($_GET['action']) ? "" : $_GET['action'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head>
<body>
    <div class="home">
        <div class="navBar">
            <?php require "./nav_bar.php" ?>
        </div>
        <div class="content">
            <?php

                switch ($action) {
                    case '':
                        include "page/students.php";
                        break;

                    case 'students':
                        include "page/students.php";
                        break;

                    case 'new-student':
                        include "page/newStudent.php";
                        break;

                    case 'update-student':
                        include "page/updateStudent.php";
                        break;

                    case 'remove-student':
                        include "page/removeStudent.php";
                        break;

                    case 'room':
                        include "page/room.php";
                        break;
                    
                    default:
                        # code...
                        break;
                }

            ?>
        </div>
    </div>
</body>
</html>