<?php

$sqlGetStudents = "SELECT * FROM `students` ";
$dataStudents = executeQuery($sqlGetStudents, true);

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = executeQuery($sqlGetClass, true);

$randomNumber = rand(0, 99999);
$paddedNumber = str_pad($randomNumber, 5, '0', STR_PAD_LEFT);
$student_code = "HS" . $paddedNumber;

if(isset($_POST['btnSubmit'])){
    $student_name = $_POST['student_name'];
    $phone_farther = $_POST['phone_farther'];
    $phone_morther = $_POST['phone_morther'];
    $birthday = $_POST['birthday'];
    $id_class = empty($_POST['class']) ? "" : $_POST['class'];
    $sex = $_POST['sex'];
    $father_name = $_POST['father_name'];
    $morther_name = $_POST['morther_name'];

    $sqlNewStudent = "INSERT INTO `students`(`birthday`, `student_name`, `phone_farther`, `phone_morther`, `id_class`, `student_code`, `sex`, `father_name`,`morther_name`,`tuition status`) VALUES ('$birthday',' $student_name','$phone_farther','$phone_morther','$id_class','$student_code', '$sex', '$father_name', '$morther_name', 0)";
    
    executeQuery($sqlNewStudent, true);
    header("location: ?action");
}



?>


<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Thêm mới học sinh</i></a>
</p>
<div class="newStudent">
    <div class="col-12 add">
        <b>Thêm mới học sinh</b>
        <hr>
        <div class="form col-8">
            <form action="" method="post">
                <div class="col-7">
                <div class="itemForm">
                    <p>Họ và tên học sinh:</p>
                    <input required name="student_name" type="text">
                </div>
                <div class="itemForm">
                    <p>Họ và tên bố:</p>
                    <input required name="father_name" type="text">
                </div>
                <div class="itemForm">
                    <p>Số điện thoại bố:</p>
                    <input required name="phone_farther" type="text">
                </div>
                <div class="itemForm">
                    <p>Họ và tên mẹ:</p>
                    <input required name="morther_name" type="text">
                </div>
                <div class="itemForm">
                    <p>Số điện thoại mẹ:</p>
                    <input required name="phone_morther" type="text">
                </div>
                <div class="itemForm">
                    <p>Giới tính:</p>
                    <select name="sex"  required>
                        <option disabled  hidden>Chọn giới tính</option>
                        <option value="1">Giới tính nam</option>
                        <option value="2">Giới tính nữ</option>
                        <option value="3">Giới tính khác</option>
                    </select>
                </div>
                <div class="itemForm">
                    <p>Ngày tháng năm sinh:</p>
                    <input required name="birthday" type="date">
                </div>
                <div class="itemForm">
                    <p>Lớp học:</p>
                    <select name="class"  required>
                        <option selected disabled  hidden>Chọn lớp học</option>
                        <?php foreach ($dataClass as $key => $value): ?>
                            <option value="<?= $value['id_class'] ?>"><?= $value["class_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                </div>
                <button name="btnSubmit" type="submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>