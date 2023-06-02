<?php

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = empty(executeQuery($sqlGetClass, true)) ? [] : executeQuery($sqlGetClass, true);

if(isset($_POST['btnSubmit'])){
    $name_class = $_POST['name_class'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $capacity = $_POST['capacity'];
    $desc_class = $_POST['post_content'];
    $tuition = $_POST['tuition'];
    $age = $_POST['age'];

    $url = "\image_upload/";
    $nameIMG = '';
    
    if ($_FILES['imagess']['size'] > 1) {
        $nameIMG = $_FILES['imagess']['name'];
        $tmp_name = $_FILES['imagess']['tmp_name'];
        $path = __DIR__ . $url . $nameIMG;

        if(move_uploaded_file($tmp_name, $path)){
            echo "Tệp tin đã được di chuyển thành công.";
        } else {
            echo "Di chuyển tệp tin thất bại.";
        }
    }

    $sqlNewClass = "INSERT INTO `class`(`class_name`, `start_date`, `end_date`, `tuition`, `desc_class`, `capacity`,  `images`, `age`) VALUES ('$name_class','$start_date','$end_date','$tuition','$desc_class','$capacity', '$nameIMG', ' $age')";

    executeQuery($sqlNewClass, true);
    header("location: ?action=room");
}



?>


<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Thêm mới lớp học</i></a>
</p>
<div class="newStudent">
    <div class="col-12 add">
        <b>Thông tin cần thêm</b>
        <div class="form">
            <form method="POST" enctype="multipart/form-data">
                <div class="col-5">
                <div class="itemForm">
                    <p>Tên lớp học:</p>
                    <input required name="name_class" type="text">
                </div>
                <div class="itemForm">
                    <p>Học phí dự kiến:</p>
                    <input required name="tuition" type="number">
                </div>
                <div class="itemForm">
                    <p>Ngày bắt đầu:</p>
                    <input required name="start_date" type="date">
                </div>
                <div class="itemForm">
                    <p>Độ tuổi:</p>
                    <input required name="age" type="text">
                </div>
                <div class="itemForm">
                    <p>Kết thúc dự kiến:</p>
                    <input required name="end_date" type="date">
                </div>
                <div class="itemForm">
                    <p>Số lượng học sinh dự kiến:</p>
                    <input required name="capacity" type="number">
                </div>
                <div class="itemForm">
                    <p>Hình ảnh:</p>
                    <input style="border: none" type="file" name="imagess" id="file" class="inputfile" />
                </div>
                </div>
                <div  class="itemForm">
                    <p>Nội dung lớp học:</p>
                    <textarea rows="10" required name="post_content" id="post_content" ></textarea>
                </div>
                <button name="btnSubmit" type="submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'post_content' );
</script>