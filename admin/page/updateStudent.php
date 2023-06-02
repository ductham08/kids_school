<?php
$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetStudent = "SELECT * FROM `students` JOIN class ON class.id_class = students.id_class WHERE id_student = $idStudent";
$dataStudent = executeQuery($sqlGetStudent, false);

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = executeQuery($sqlGetClass, true);

if(isset($_POST['btnSubmit'])){
    $student_name = $_POST['student_name'];
    $phone_farther = $_POST['phone_farther'];
    $phone_morther = $_POST['phone_morther'];
    $birthday = $_POST['birthday'];
    $id_class = empty($_POST['class']) ? "" : $_POST['class'];
    $day_admission = $_POST['day_admission'];

    $sqlUpdateStudent = "UPDATE `students` SET `birthday`='$birthday',`student_name`='$student_name',`phone_farther`='$phone_farther',`phone_morther`='$phone_morther',`id_class`='$id_class',`day_admission`='$day_admission' WHERE id_student=$idStudent";
    executeQuery($sqlUpdateStudent, true);
    header("location: ?action");
}

function sex($number){
    if ($number == 1) {
        return "Nam";
    } else if ($number == 2) {
        return "Nữ";
    } else {
        return "Khác";
    }
    
}


?>


<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Cập nhật thông tin học sinh</i></a>
</p>
<div class="newStudent">
    <div class="col-12 add">
        <b>Thông tin cần chỉnh sửa</b>
        <hr>
        <div class="form col-12">
            <form action="" method="post">
                <div class="col-6">
                    <div class="itemForm">
                        <p>Họ và tên:</p>
                        <input required name="student_name" value="<?= $dataStudent['student_name'] ?>" type="text">
                    </div>
                    <div class="itemForm">
                        <p>Số điện thoại bố:</p>
                        <input required name="phone_farther" value="<?= $dataStudent['phone_farther'] ?>" type="text">
                    </div>
                    <div class="itemForm">
                        <p>Số điện thoại mẹ:</p>
                        <input required name="phone_morther" value="<?= $dataStudent['phone_morther'] ?>" type="text">
                    </div>
                    <div class="itemForm">
                        <p>Ngày tháng năm sinh:</p>
                        <input value="<?= $dataStudent['birthday'] ?>" required name="birthday" type="date">
                    </div>
                    <div class="itemForm">
                        <p>Lớp học:</p>
                        <select name="class"  required>
                            <option selected disabled  hidden>Chọn ca</option>
                            <?php foreach ($dataClass as $key => $value): ?>
                                <option selected = "<? $value['id_class'] == $dataStudent['id_class'] ? true : false ?>" value="<?= $value['id_class'] ?>"><?= $value["class_name"] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div  class="itemForm">
                        <p>Ngày nhập học:</p>
                        <input required name="day_admission" value="<?= $dataStudent['day_admission'] ?>" type="date">
                    </div>
                </div>
                <button name="btnSubmit" type="submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>