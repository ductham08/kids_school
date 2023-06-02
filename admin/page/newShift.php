<?php

if(isset($_POST['btnSubmit'])){
    $hourStart = $_POST['hourStart'];
    $nameShift = $_POST['nameShift'];
    $hourEnd = $_POST['hourEnd'];


    $sqlNewClass = "INSERT INTO `shiftClass`(`hourStart`, `nameShift`, `hourEnd`) VALUES ('$hourStart','$nameShift', '$hourEnd' )";

    executeQuery($sqlNewClass, true);
    header("location: ?action=shift");
}



?>


<p class="navPage">
    <a href="?action="><i>Trang Chủ</i></a> 
    <i>/</i>
    <a href=""><i>Thêm ca học</i></a>
</p>
<div class="newStudent">
    <div class="col-12 add">
        <b>Thông tin cần thêm</b>
        <div class="form">
            <form method="POST" enctype="multipart/form-data">
                <div class="col-5">
                <div class="itemForm">
                    <p>Ca học:</p>
                    <input required name="nameShift" type="text">
                </div>
                <div class="itemForm">
                    <p>Bắt đầu:</p>
                    <input required name="hourStart" type="time">
                </div>
                <div class="itemForm">
                    <p>Kết thúc:</p>
                    <input required name="hourEnd" type="time">
                </div>
                <button name="btnSubmit" type="submit">Lưu thông tin</button>
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace( 'post_content' );
</script>