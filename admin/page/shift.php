<?php

$sqlGetShift = "SELECT * FROM shiftClass";

$dataShift = empty(executeQuery($sqlGetShift, true)) ? [] : executeQuery($sqlGetShift, true);

function getStatus($status) {
	if($status == 0){
		return "Chưa public";
	} else if ($status == 0) {
		return "Public";
	}
}

?>


<div class="studentPage">
    <p class="navPage">
        <a href=""><i>Trang Chủ</i></a> 
        <i>/</i>
        <a href=""><i>Danh sách ca học</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ca học</th>
                    <th>Vào học</th>
                    <th>Tan học</th>
                    <th colspan="2">
                        <a href="?action=new-shift">Thêm ca mới</a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataShift as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td class="col-2"><?= $value['nameShift'] ?></td>
                    <td class="col-3"><?= $value['hourStart'] ?></td>
                    <td class="col-3"><?= $value['hourEnd'] ?></td>
                    <td>
                        <a href="?action=update-shift&id=<?= $value['idShift'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-shift&id=<?= $value['idShift'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>