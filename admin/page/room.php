<?php

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = executeQuery($sqlGetClass, true);

if(isset($_POST['btnSubmit'])){
    $name_class = $_POST['name_class'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $capacity = $_POST['capacity'];
    $desc_class = $_POST['desc_class'];
    $tuition = $_POST['tuition'];

    $sqlNewClass = "INSERT INTO `class`(`name_class`, `start_date`, `end_date`, `tuition`, `capacity`, `desc_class`) VALUES ('$name_class',' $start_date','$end_date','$tuition','$capacity','$desc_class')";

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
    <div class="col-5 add">
        <b>Thông tin cần thêm</b>
        <div class="form col-8">
            <form action="" method="post">
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
                    <p>Kết thúc dự kiến:</p>
                    <input required name="end_date" type="date">
                </div>
                <div class="itemForm">
                    <p>Số lượng học sinh dự kiến:</p>
                    <input required name="capacity" type="number">
                </div>
                <div  class="itemForm">
                    <p>Nội dung lớp học:</p>
                    <textarea  required name="desc_class" id="" cols="30" rows="10"></textarea>
                </div>
                <button name="btnSubmit" type="submit">Lưu</button>
            </form>
        </div>
    </div>
    <div class="col-7 list">
        <b>Danh sách lớp hiện có</b>
        <table>
            
            <thead>
                <tr>
                    <th>Tên lớp</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Học phí</th>
                    <th>Quy mô lớp</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataClass as $key => $value): ?>
                <tr>
                    <td><?= $value['class_name'] ?></td>
                    <td><?= $value['start_date'] ?></td>
                    <td><?= $value['end_date'] ?></td>
                    <td><?= $value['tuition'] ?></td>
                    <td><?= $value['capacity'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>