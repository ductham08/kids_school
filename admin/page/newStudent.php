<?php

$sqlGetStudents = "SELECT * FROM `students` ";
$dataStudents = executeQuery($sqlGetStudents, true);

$sqlGetClass = "SELECT * FROM `class` ";
$dataClass = executeQuery($sqlGetClass, true);

if(isset($_POST['btnSubmit'])){
    $student_name = $_POST['student_name'];
    $phone_farther = $_POST['phone_farther'];
    $phone_morther = $_POST['phone_morther'];
    $birthday = $_POST['birthday'];
    $id_class = empty($_POST['class']) ? "" : $_POST['class'];
    $day_admission = $_POST['day_admission'];

    $sqlNewStudent = "INSERT INTO `students`(`birthday`, `student_name`, `phone_farther`, `phone_morther`, `id_class`, `day_admission`) VALUES ('$birthday',' $student_name','$phone_farther','$phone_morther','$id_class','$day_admission')";
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
    <div class="col-5 add">
        <b>Thông tin cần thêm</b>
        <div class="form col-8">
            <form action="" method="post">
                <div class="itemForm">
                    <p>Họ và tên:</p>
                    <input required name="student_name" type="text">
                </div>
                <div class="itemForm">
                    <p>Số điện thoại bố:</p>
                    <input required name="phone_farther" type="text">
                </div>
                <div class="itemForm">
                    <p>Số điện thoại mẹ:</p>
                    <input required name="phone_morther" type="text">
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
                <div  class="itemForm">
                    <p>Ngày nhập học:</p>
                    <input required name="day_admission" type="date">
                </div>
                <button name="btnSubmit" type="submit">Lưu</button>
            </form>
        </div>
    </div>
    <div class="col-7 list">
        <b>Danh sách học sinh</b>
        <table>
            
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Ngày sinh</th>
                    <th>Số liên lạc của Bố</th>
                    <th>Số liên lạc của Mẹ</th>
                    <th>Ngày nhập học</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataStudents as $key => $value): ?>
                <tr>
                    <td><?= $value['student_name'] ?></td>
                    <td><?= $value['birthday'] ?></td>
                    <td><?= $value['phone_farther'] ?></td>
                    <td><?= $value['phone_morther'] ?></td>
                    <td><?= $value['day_admission'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>