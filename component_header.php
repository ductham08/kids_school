<?php
    session_start();
    require ("./database/url.php");

    if($_SESSION["user"]){
        $href_info = "./signIn.php";
    } else {
        $href_info = "./signIn.php";
    }


?>

<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-primary">KidKinder</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
                <a href="about.php" class="nav-item nav-link">Về Chúng Mình</a>
                <a href="class.php" class="nav-item nav-link">Lớp Học</a>
                <a href="team.php" class="nav-item nav-link">Giáo Viên</a>
                <a href="blog.php" class="nav-item nav-link">Bài Viết</a>
                <a href="single.php" class="nav-item nav-link">Chi Tiết Bài Viết</a>
                <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
            </div>
            <a href="<?= $href_info ?>">
                <i class="fas fa-user" style="color: #00394f;"></i>
            </a>
        </div>
    </nav>
</div>
<!-- Navbar End -->