<?php
	session_start(); 

	if (isset($_POST["btnSubmit"])) {
		$title = $_POST["title"];
		$content = $_POST["post_content"];
		$is_public = 0;

		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}

		$url = "\image_upload/";
		$nameIMG = '';
		
		if ($_FILES['imagess']['size'] > 1) {
			$nameIMG = $_FILES['imagess']['name'];
			$tmp_name = $_FILES['imagess']['tmp_name'];
			$path = __DIR__ . $url . $nameIMG;

			if(move_uploaded_file($tmp_name, $path)){
				echo "Tệp tin đã được di chuyển thành công.";
			} else {
				echo "Di chuyển tệp tin thất bại.";
			}
		}
		
		$sqlCreateBlog = "INSERT INTO `blog`(`title`, `content`, `thumnail`, `publics`, `createAt`) VALUES ('$title','$content','$nameIMG','$is_public',now())";

		executeQuery($sqlCreateBlog, true);
		// var_dump($content);die;
	}

?>

<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Thêm mới bài viết</i></a>
</p>
<div class="newStudent">
    <div class="add col-12">
        <div class="form col-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="itemForm col-7">
                    <p>Tiêu đề bài viết:</p>
                    <input required type="text" id="title" name="title">
                </div>
                <div class="itemForm col-7">
                    <p>Thumnail:</p>
                    <input required style="border: none" type="file" name="imagess" id="file" class="inputfile" />
                </div>
                <div class="itemForm">
                    <p>Nội dung bài viết:</p>
                    <textarea required name="post_content" id="post_content" ></textarea>
                </div>
                <div class="itemForm" style="display: flex; justify-content: flex-start;align-items: center;">
					<input style="width: min-content; margin: 15px 5px 15px 0px" type="checkbox" id="is_public" name="is_public" value="1"> 
					<label for="is_public">Publics</label>
                </div>
                <button name="btnSubmit" type="submit">Lưu</button>
            </form>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'post_content' );
</script>