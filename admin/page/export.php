<?php
 header("Content-Type: application/vnd.ms-word");
 header("Expires: 0");
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("content-disposition: attachment;filename=BienLaiThuTien.doc");

$idStudent = isset($_GET['id']) ? $_GET['id'] : "";

$sqlGetStudent = "SELECT * FROM `students` JOIN class ON class.id_class = students.id_class WHERE student_code = '$idStudent'";
$dataStudent = executeQuery($sqlGetStudent, false);


?>

<style>

    .navBar{
        display: none;
    }

    .header{
        text-align: center;
    }

    table{
        background-color: transparent;
        width: 100% !important;
    }

    table td,tr{
        background-color: white !important;
        border: none !important;
    }

</style>

<div>
    
    <div class="header">
        <h3>BIÊN LAI THU TIỀN</h3>
        <p></p>
        <p>Ngày ....... Tháng ..... Năm 20.... Quyển số: ......</p>
        <p>Số: ...... </p>
    </div>

    <div class="main">
        <p>Họ, tên học sinh: <b><i><?= $dataStudent['student_name'] ?></i></b></p>
        <p>Lớp: ........ <i><?= $dataStudent['class_name'] ?></i>........</p>
        <p>Họ, tên bố: <i><?= $dataStudent['father_name'] ?></i></p>
        <p>Số điện thoại bố: <i><?= $dataStudent['phone_farther'] ?></i></p>
        <p>Họ, tên mẹ: <i><?= $dataStudent['morther_name'] ?></i></p>
        <p>Số điện thoại mẹ: <i><?= $dataStudent['phone_morther'] ?></i></p>
        <p>Thời gian bắt đầu khóa học từ ngày: .... <i><?= $dataStudent['start_date'] ?> .... đến .... <?= $dataStudent['end_date'] ?> .... </i></p>
        <p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
        <p><b>Nội dung thu, trong đó bao gồm:</b></p>
        <p>+ Học phí:  ........ <i><?= number_format($dataStudent['tuition'], 0, ',', '.') ?> đ ........</i></p>
        <p>Tổng thu: ........ <?= number_format($dataStudent['tuition'], 0, ',', '.') ?> đ ........(Viết bằng chữ) .......................................................................................</p>
    </div>

    <div class="footer">
        <table>
            <tr>
                <td>
                    <p><b>Người nộp tiền</b></p>
                    <i>(Ký, ghi dõ họ tên)</i>
                </td>
                <td>
                    <p><b>Người thu tiền</b></p>
                    <i>(Ký, ghi dõ họ tên)</i>
                </td>
            </tr>
        </table>
    </div>
</div>
