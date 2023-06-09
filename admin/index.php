<?php
require_once("../database/config.php");
session_start();

$action = empty($_GET['action']) ? "" : $_GET['action'];

$admin = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý</title>

    <script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="home">
        <?php if($admin['role'] != 0) : ?>
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
                                
                            case 'register-students':
                                include "page/studentRegister.php";
                                break;

                            case 'register-status':
                                include "page/updateStatus.php";
                                break;

                            case 'export':
                                include "page/export.php";
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

                            case 'new-room':
                                include "page/newRoom.php";
                                break;

                            case 'update-class':
                                include "page/updateRoom.php";
                                break;

                            case 'remove-class':
                                include "page/removeClass.php";
                                break;

                            case 'teacher':
                                include "page/teachers.php";
                                break;

                            case 'new-teacher':
                                include "page/newTeacher.php";
                                break;

                            case 'update-teacher':
                                include "page/updateTeacher.php";
                                break;

                            case 'shift':
                                include "page/shift.php";
                                break;

                            case 'remove-shift':
                                include "page/removeShift.php";
                                break;

                            case 'users':
                                include "page/user.php";
                                break;

                            case 'role':
                                include "page/updateRole.php";
                                break;

                            case 'new-shift':
                                include "page/newShift.php";
                                break;
                            
                            default:
                                # code...
                                break;
                        }
                    ?>
            </div>
        <?php elseif($admin['role'] == 0 ) : ?>
            <p style="text-align: center;line-height: 100vh;">Bạn không có quyền truy cập, vui lòng quay lại <a href="../index.php">trang chủ</a>!</p>
        <?php endif ?>
    </div>


</body>
</html>