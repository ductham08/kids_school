<?php

$idClass = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetClass = "SELECT * FROM class JOIN students ON class.id_class = students.id_class WHERE class.id_class = $idClass ";
$dataClass = executeQuery($sqlGetClass, false);

if(isset($_POST['btnSubmit'])){
    $name_class = $_POST['name_class'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $capacity = $_POST['capacity'];
    $desc_class = $_POST['desc_class'];
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

    $sqlUpdateClass = "UPDATE `class` SET `class_name`='$name_class',`start_date`='$start_date',`end_date`='$end_date',`tuition`='$tuition',`desc_class`='$desc_class',`capacity`='$capacity' , 'age'='$age' WHERE  id_class = $idClass";

    executeQuery($sqlUpdateClass, true);
    header("location: ?action=room");
}


?>


<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Cập nhật thông tin lớp</i></a>
</p>
<div class="newStudent">
    <div class="col-5 add">
        <b>Thông tin cần cập nhật</b>
        <div class="form col-8">
            <form action="" method="post">
                <div class="itemForm">
                    <p>Tên lớp học:</p>
                    <input required name="name_class" value="<?= $dataClass['class_name'] ?>" type="text">
                </div>
                <div class="itemForm">
                    <p>Học phí dự kiến:</p>
                    <input required name="tuition" value="<?= $dataClass['tuition'] ?>" type="number">
                </div>
                <div class="itemForm">
                    <p>Độ tuổi:</p>
                    <input required name="age" type="text">
                </div>
                <div class="itemForm">
                    <p>Ngày bắt đầu:</p>
                    <input required name="start_date" value="<?= $dataClass['start_date'] ?>" type="date">
                </div>
                <div class="itemForm">
                    <p>Kết thúc dự kiến:</p>
                    <input required name="end_date" value="<?= $dataClass['end_date'] ?>" type="date">
                </div>
                <div class="itemForm">
                    <p>Số lượng học sinh dự kiến:</p>
                    <input required name="capacity" value="<?= $dataClass['capacity'] ?>" type="number">
                </div>
                <div  class="itemForm">
                    <p>Nội dung lớp học:</p>
                    <textarea  required name="desc_class" id="" cols="30" rows="10" ><?= $dataClass['desc_class'] ?> </textarea>
                </div>
                <button name="btnSubmit" type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
    <div class="col-7 list">
        <b>Danh sách lớp hiện có</b>
        <p>Lớp học <b><i><?= $dataClass['class_name'] ?>!</i></b></p>
        <p>Sĩ số dự kiến: <b><?= $dataClass['capacity'] ?></b> học sinh</p>
        <p>Ngày bắt đầu dự kiến: <b><?= $dataClass['start_date'] ?></b></p>
        <p>Ngày kết thúc dự kiến: <b><?= $dataClass['end_date'] ?></b></p>
        <p>Học phí: <b><?= number_format($dataClass['tuition'], 0, ',', '.') ?>đ</b></p>
        <hr>
        <p><?= $dataClass['desc_class'] ?></p>
    </div>
</div>