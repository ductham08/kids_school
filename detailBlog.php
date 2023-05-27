<?php

    require_once("./database/config.php");
    $id = isset($_GET['id']) ? $_GET['id'] : "";

    $sqlGetClass = "SELECT * FROM `blog` WHERE id = $id ";
    $dataClass = executeQuery($sqlGetClass, false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
</head>

<body>
    <!-- HEADER START -->
    <?php
        require ("./component_header.php");
    ?>
    <!-- HEADER END -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Bài viết</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Trang chủ</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Chi tiết bài viết</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <div class="d-flex flex-column text-left mb-3">
                <p class="section-title pr-5"><span class="pr-2">Chi tiết bài viết</span></p>
                <h1 class="mb-3"><?= $dataClass['title'] ?></h1>
                <div class="d-flex">
                    <p class="mr-3"><?= $dataClass['createAt'] ?> </p>
                </div>
            </div>
            <div class="mb-5">
                <?= $dataClass['content'] ?>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- FOOTER START -->
    <?php
        require ("./component_footer.php");
    ?>
    <!-- FOOTER END -->
</body>

</html>