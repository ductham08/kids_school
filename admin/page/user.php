<?php

$sqlGetStudents = "SELECT * FROM `users`";

$dataStudents = empty(executeQuery($sqlGetStudents, true)) ? [] : executeQuery($sqlGetStudents, true);

function checkRole($role){
    switch ($role) {
        case '1':
            return "Admin";
            break;

        case '2':
            return "Giáo viên";
            break;

        case '3':
            return "NV tài chính";
            break;
        
        default:
            return "Người dùng";
            break;
    }
}

?>

<style>
    td button{
        padding: 0px 5px;
        box-shadow: 0px 0px 3px black;
        border-radius: 6px;
    }
</style>


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
                    <th>Chức năng</th>
                    <th>Email</th>
                    <th>Phân quyền</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataStudents as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= checkRole($value['role']) ?></td>
                    <td><?= $value['email'] ?></td>
                    <td>
                        <button><a href="?action=role&id=<?= $value['id'] ?>&role=1">Admin</a></button>
                        <button><a href="?action=role&id=<?= $value['id'] ?>&role=2">Giáo viên</a></button>
                        <button><a href="?action=role&id=<?= $value['id'] ?>&role=3">Học vụ</a></button>
                        <button><a href="?action=role&id=<?= $value['id'] ?>&role=4">Kế hoạch</a></button>
                        <button><a href="?action=role&id=<?= $value['id'] ?>&role=0">Người dùng</a></button>
                    </td>
                    <td>
                        <a href="?action=remove-student&id=<?= $value['id'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>