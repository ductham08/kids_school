<?php

require_once("./database/config.php");

session_start();

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = empty(executeQuery($sqlGetClass, true)) ? [] : executeQuery($sqlGetClass, true);

$sqlGetBlog = "SELECT * FROM `blog` WHERE publics = 1";
$dataBlog = empty(executeQuery($sqlGetBlog, true)) ? [] : executeQuery($sqlGetBlog, true);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <style>
        .contentBlog{
            display: -webkit-box;
            -webkit-line-clamp: 3;  /* số dòng hiển thị */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .titleBlog{
            display: -webkit-box;
            -webkit-line-clamp: 1;  /* số dòng hiển thị */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-top:10px;
        }
    </style>
</head>

<body>
    <!-- HEADER START -->
    <?php
        require ("./component_header.php");
    ?>
    <!-- HEADER END -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Ngôi nhà thứ hai của những thiên thần nhỏ</h4>
                <h1 class="display-3 font-weight-bold text-white">Phương pháp học tập mới cho các bé</h1>
                <p class="text-white mb-4">
                    KidKinder là một nhà trẻ chuyên nghiệp và thân thiện với trẻ em, cung cấp môi trường học tập và phát triển đầy sáng tạo và an toàn cho các em nhỏ từ 6 tháng đến 5 tuổi. Với đội ngũ giáo viên giàu kinh nghiệm và các hoạt động giáo dục đa dạng, KidKinder là lựa chọn lý tưởng cho các bậc phụ huynh có nhu cầu chăm sóc và giáo dục cho con em mình.
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Trò chơi năng động</h5>
                            <p class="m-0">
                                Trò chơi là một phần không thể thiếu trong môi trường học tập và giáo dục của nhà trẻ, giúp trẻ em rèn luyện kỹ năng xã hội, tăng cường sự sáng tạo và phát triển thể chất. Những hoạt động như xếp hình...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Học cùng âm nhạc</h5>
                            <p class="m-0">
                                Âm nhạc là một phương tiện tuyệt vời để giáo dục và phát triển các kỹ năng của trẻ em. Hát, nhảy và chơi nhạc cụ không chỉ giúp trẻ phát triển khả năng thẩm mỹ, sự nhạy cảm âm nhạc, mà...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Nghệ thuật</h5>
                            <p class="m-0">
                                Nghệ thuật là một lĩnh vực đa dạng và phong phú, giúp trẻ em khám phá và thể hiện sự sáng tạo của mình thông qua các hình thức như vẽ tranh, điêu khắc, chạm khắc, xếp giấy, và chơi đồ chơi sáng tạo...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Những chuyến dã ngoại</h5>
                            <p class="m-0">
                                Những chuyến dã ngoại là cơ hội để trẻ em khám phá thiên nhiên và học hỏi về môi trường xung quanh. Khi tham gia vào các hoạt động dã ngoại, trẻ có thể rèn luyện các kỹ năng...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Chế độ ăn phù hợp</h5>
                            <p class="m-0">
                                Một chế độ ăn phù hợp là cực kỳ quan trọng trong việc phát triển và tăng cường sức khỏe của trẻ em. Các bữa ăn hàng ngày của trẻ nên cung cấp đầy đủ các dưỡng chất cần thiết, bao gồm protein...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h5>Học tập vui vẻ</h5>
                            <p class="m-0">
                                Học tập vui vẻ là một phương pháp giáo dục hiệu quả giúp trẻ em hứng thú và động lực trong quá trình học tập. Khi học tập trở nên thú vị và hấp dẫn, trẻ em sẽ dễ dàng tiếp thu và ghi nhớ kiến thức hơn...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">HIỂU THÊM VỀ KIDKINDER</span></p>
                    <h1 class="mb-4">Ngôi nhà thứ hai của những thiên thần nhỏ</h1>
                    <p>
                        Trẻ em là tương lai của chúng ta và giáo dục là yếu tố quan trọng trong sự phát triển toàn diện của họ. Chính vì vậy, việc tạo ra một môi trường học tập và giáo dục thích hợp là điều cực kỳ quan trọng. Tại KidKinder, các em được rèn luyện kỹ năng, phát triển sáng tạo và tăng cường sức khỏe, giúp các em trở thành những người trưởng thành tốt và có sự nghiệp thành công trong tương lai.
                    </p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Môi trường giáo dục thân thiện và an toàn</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Giáo viên có tâm huyết và chuyên nghiệp</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Chương trình giáo dục đa dạng và phù hợp</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php
        require ("./component_footer.php");
    ?>
    <!-- FOOTER END -->

</body>

</html>