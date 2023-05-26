<?php

$sqlGetStudents = "SELECT * FROM `students` JOIN class ON class.id_class = students.id_class";

$dataStudents = empty(executeQuery($sqlGetStudents, true)) ? [] : executeQuery($sqlGetStudents, true);

?>


<div class="studentPage">
    <p class="navPage">
        <a href=""><i>Trang Chủ</i></a> 
        <i>/</i>
        <a href=""><i>Danh sách học sinh</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Số liên lạc của Bố</th>
                    <th>Số liên lạc của Mẹ</th>
                    <th>Ngày/ tháng/ năm sinh</th>
                    <th>Ngày nhập học</th>
                    <th>Lớp học</th>
                    <th colspan="2">
                        <a href="?action=new-student">Thêm sinh viên</a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataStudents as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['student_name'] ?></td>
                    <td><?= $value['phone_farther'] ?></td>
                    <td><?= $value['phone_morther'] ?></td>
                    <td><?= $value['birthday'] ?></td>
                    <td><?= $value['day_admission'] ?></td>
                    <td><?= $value['class_name'] ?></td>
                    <td>
                        <a href="?action=update-student&id=<?= $value['id_student'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-student&id=<?= $value['id_student'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>