<?php

$sqlGetBlog = "SELECT * FROM `blog`";

$dataClass = empty(executeQuery($sqlGetBlog, true)) ? [] : executeQuery($sqlGetBlog, true);

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
        <a href=""><i>Danh sách bài viết</i></a>
    </p>

    <div class="content">
        <table>
            
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Thumnail</th>
                    <th>Tiêu đề</th>
                    <th>Tình trạng</th>
                    <th colspan="2">
                        <a href="?action=new-blog">Thêm bài viết</a>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($dataClass as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td class="col-1"><img width="100%" src="./page/image_upload/<?= $value['thumnail'] ?>" alt=""> </td>
                    <td class="col-5"><?= $value['title'] ?></td>
                    <td><?= getStatus($value['publics']) ?></td>
                    <td>
                        <a href="?action=update-class&id=<?= $value['id'] ?>">Cập nhật</a>
                    </td>
                    <td>
                        <a href="?action=remove-class&id=<?= $value['id'] ?>">Xóa bỏ</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>
</div>