<?php
require "../database/url.php";

$admin = $_SESSION['user'];
$role = $admin['role'];

?>

<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<div class="nav">
    <h3>Kidkinder</h3>
    <ul>
        <li style="display: <?= ($role == 1 || $role == 3) ? '' : 'none' ?>;" >
            <a href="./?action=students">
                <i class="fas fa-user-graduate"></i>
                Học Viên
            </a>
        </li>
        <li style="display: <?= ($role == 1 || $role == 3) ? '' : 'none' ?>;">
            <a href="./?action=register-students">
                <i class="fas fa-user-graduate"></i>
                Danh Sách Đăng Ký
            </a>
        </li>
        <li style="display: <?= ($role != 0) ? '' : 'none' ?>;">
            <a href="?action=room">
                <i class="fas fa-home"></i>
                Lớp Học
            </a>
        </li>
        <li style="display: <?= ($role == 1 || $role == 4 || $role == 2) ? '' : 'none' ?>;">
            <a href="?action=teacher">
                <i class="fas fa-chalkboard-teacher"></i>
                Giáo viên
            </a>
        </li>
        <li style="display: <?= ($role == 1 || $role == 4 || $role == 2) ? '' : 'none' ?>;">
            <a href="?action=shift">
                <i class="fas fa-newspaper"></i>
                Ca giảng dạy
            </a>
        </li>
        <li style="display: <?= ($role == 1 ) ? '' : 'none' ?>;">
            <a href="?action=users">
                <i class="fas fa-users"></i>
                Người Dùng
            </a>
        </li>
        <li>
            <a href="../logout.php">
                <i class="fas fa-users"></i>
                Đăng xuất
            </a>
        </li>
    </ul>
</div>

<script src="https://kit.fontawesome.com/c29ec90d7d.js" crossorigin="anonymous"></script>