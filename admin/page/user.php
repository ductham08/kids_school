<?php

$sqlGetStudents = "SELECT * FROM `user`";

$dataStudents = empty(executeQuery($sqlGetStudents, true)) ? [] : executeQuery($sqlGetStudents, true);


?>


<div class="studentPage">
    <p class="navPage">
        <a href=""><i>Trang Chủ</i></a> 
        <i>/</i>
        <a href=""><i>Danh sách người dùng</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Phân quyền</th>
                    <th colspan="2">
                        Hành động
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