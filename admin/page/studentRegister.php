<?php

$sqlGetStudents = "SELECT * FROM `students` JOIN class ON class.id_class = students.id_class WHERE tuition_status = 0";

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
                    <th>Mã học sinh</th>
                    <th>Họ và tên</th>
                    <th>Số liên lạc của Bố</th>
                    <th>Số liên lạc của Mẹ</th>
                    <th>Ngày sinh</th>
                    <th>Lớp học</th>
                    <th>Học phí</th>
                    <th colspan="3">
                        Thao tác
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataStudents as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['student_code'] ?></td>
                    <td><?= $value['student_name'] ?></td>
                    <td><?= $value['phone_farther'] ?></td>
                    <td><?= $value['phone_morther'] ?></td>
                    <td><?= $value['birthday'] ?></td>
                    <td><?= $value['class_name'] ?></td>
                    <td>
                        <button>
                            <a href="?action=register-status&id=<?= $value['student_code'] ?>">Hoàn thành</a>
                        </button>
                    </td>
                    <td>
                        <a href="?action=update-student&id=<?= $value['id_student'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-student&id=<?= $value['id_student'] ?>">Xóa bỏ</a>
                    </td>
                    <td>
                        <a href="?action=export&id=<?= $value['student_code'] ?>">Xuất hóa đơn</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>