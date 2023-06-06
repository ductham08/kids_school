<?php
$idTeacher = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = empty(executeQuery($sqlGetClass, true)) ? [] : executeQuery($sqlGetClass, true);

$sqlGetShift = "SELECT * FROM shiftClass";
$dataShift = empty(executeQuery($sqlGetShift, true)) ? [] : executeQuery($sqlGetShift, true);

$sqlGetDetailShift = "SELECT * from detailClass join class on detailClass.idClass = class.id_class join shiftClass on shiftClass.idShift = detailClass.idShift";
$dataDetailShift = empty(executeQuery($sqlGetDetailShift, true)) ? [] : executeQuery($sqlGetDetailShift, true);

$getTeacher = "select * from teachers where idTeacher = $idTeacher ";
$dataTeacher = executeQuery($sqlGetDetailShift, false);

if(isset($_POST['btnSubmit'])){
    $nameTeacher = $_POST['nameTeacher'];
    $emailTeacher = $_POST['emailTeacher'];
    $class1 = $_POST['class1'];
    $shift1 = $_POST['shift1'];
    $class2 = $_POST['class2'];
    $shift2 = $_POST['shift2'];
    $phoneNumber = $_POST['phoneNumber'];
    $cccd = $_POST['cccd'];
  

    $sqlNewClass = "INSERT INTO `teachers`(`nameTeacher`, `emailTeacher`, `class1`, `shift1`, `class2`, `shift2`, `cccd`, `phoneNumber`) VALUES ('$nameTeacher', '$emailTeacher', '$class1', '$shift1', '$class2', '$shift2', '$cccd', ' $phoneNumber')";

    executeQuery($sqlNewClass, true);
    header("location: ?action=teacher");
}

?>

<style>
    .col-12{
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
</style>

<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Thêm mới giáo viên</i></a>
</p>
<div class="newStudent">
    <div class="col-12 add">
        <div class="form col-5">
            <b>Thông tin cần thêm</b>
            <hr>
            <form method="POST" enctype="multipart/form-data">
                <div class="itemForm">
                    <p>Họ và tên:</p>
                    <input value="<?= $dataTeacher['nameTeacher'] ?>" required name="nameTeacher" type="text">
                </div>
                <div class="itemForm">
                    <p>Email:</p>
                    <input value="<?= $dataTeacher['emailTeacher'] ?>" required name="emailTeacher" type="text">
                </div>
                <div class="itemForm">
                    <p>Số điện thoại:</p>
                    <input value="<?= $dataTeacher['phoneNumber'] ?>" required name="phoneNumber" type="text">
                </div>
                <div class="itemForm">
                    <p>CCCD:</p>
                    <input value="<?= $dataTeacher['cccd'] ?>" required name="cccd" type="text">
                </div>
                <div class="itemForm">
                    <p>Lớp phụ trách thứ nhất:</p>
                    <select name="class1"  required>
                        <option selected disabled  hidden>Chọn lớp</option>
                        <?php foreach ($dataClass as $key => $value): ?>
                            <option value="<?= $value['id_class'] ?>"><?= $value["class_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="itemForm">
                    <p>Ca phụ trách thứ nhất:</p>
                    <select name="shift1"  required>
                        <option selected disabled  hidden>Chọn ca phụ trách</option>
                        <?php foreach ($dataShift as $key => $value): ?>
                            <option value="<?= $value['idShift'] ?>">Ca <?= $value["nameShift"] ?> ( <?= $value["hourStart"] ?> - <?= $value["hourEnd"]?>)</option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="itemForm">
                    <p>Lớp phụ trách thứ hai:</p>
                    <select name="class2"  required>
                        <option selected disabled  hidden>Chọn lớp</option>
                        <?php foreach ($dataClass as $key => $value): ?>
                            <option value="<?= $value['id_class'] ?>"><?= $value["class_name"] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="itemForm">
                    <p>Ca phụ trách thứ hai:</p>
                    <select name="shift2"  required>
                        <option selected disabled  hidden>Chọn ca phụ trách</option>
                        <?php foreach ($dataShift as $key => $value): ?>
                            <option value="<?= $value['idShift'] ?>">Ca <?= $value["nameShift"] ?> ( <?= $value["hourStart"] ?> - <?= $value["hourEnd"]?>)</option>
                        <?php endforeach ?>
                    </select>
                </div>
                
                <button name="btnSubmit" type="submit">Lưu thông tin</button>
            </form>
        </div>

        <div class="col-6">
            <b>Danh sách lớp và ca đã có người nhận</b>
            <hr>
            <i style="font-size: 15px; color: red">(*) Vui lòng chọn lớp không trùng với lớp đã có người nhận</i>
            <table>
                <thead>
                    <tr>
                        <th>Lớp học</th>
                        <th>Ca học</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataDetailShift as $key => $value): ?>
                        <tr>
                            <td><?= $value['class_name'] ?></td>
                            <td>Ca <?= $value['nameShift'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'post_content' );
</script>