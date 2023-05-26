<?php

$sqlGetClass = "SELECT * FROM `class`";

$dataClass = empty(executeQuery($sqlGetClass, true)) ? [] : executeQuery($sqlGetClass, true);

?>


<div class="studentPage">
    <p class="navPage">
        <a href=""><i>Trang Chủ</i></a> 
        <i>/</i>
        <a href=""><i>Danh sách lớp học</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên lớp</th>
                    <th>Bắt đầu dự kiến</th>
                    <th>Kết thúc dự kiến</th>
                    <th>Học phí</th>
                    <th>Sĩ số dự kiến</th>
                    <th colspan="2">
                        <a href="?action=new-room">Thêm lớp học</a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataClass as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['class_name'] ?></td>
                    <td><?= $value['start_date'] ?></td>
                    <td><?= $value['end_date'] ?></td>
                    <td><?= number_format($value['tuition'], 0, ',', '.') ?>đ</td>
                    <td><?=  $value['capacity'] ?></td>
                    <td>
                        <a href="?action=update-class&id=<?= $value['id_class'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-class&id=<?= $value['id_class'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>