<?php

$sqlTeacher = "SELECT * FROM kisdschool.teachers join detailClass on teachers.idTeacher = detailClass.idTeacher join class on detailClass.idClass = class.id_class join shiftClass on shiftClass.idShift = detailClass.idShift";

$dataTeachers = empty(executeQuery($sqlTeacher, true)) ? [] : executeQuery($sqlTeacher, true);

?>

<div class="teacherPage">
    <p class="navPage">
        <a href=""><i>Trang Chủ</i></a> 
        <i>/</i>
        <a href=""><i>Danh sách giáo viên</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th class="col-1">STT</th>
                    <th class="col-2">Họ và tên</th>
                    <th class="col-2">Email</th>
                    <th class="col-2">Số điện thoại</th>
                    <th class="col-2">Lớp giảng dạy</th>
                    <th class="col-1">Ca giảng dạy</th>
                    <th colspan="2" class="col-2">
                        <a href="?action=new-teacher">Thêm mới</a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataTeachers as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['nameTeacher'] ?></td>
                    <td><?= $value['emailTeacher'] ?></td>
                    <td><?= $value['phoneNumber'] ?></td>
                    <td><?= $value['class_name'] ?></td>
                    <td><?= $value['nameShift'] ?></td>
                    <td>
                        <a href="?action=update-teacher&id=<?= $value['idTeacher'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-teacher&id=<?= $value['idTeacher'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>