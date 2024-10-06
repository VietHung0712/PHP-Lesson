<?php
$toan = $ly = $hoa = $diemchuan = $tongdiem = $kq = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $toan = $_POST['toan'];
    $ly = $_POST['ly'];
    $hoa = $_POST['hoa'];
    $diemchuan = $_POST['diemchuan'];

    $tongdiem = $toan + $ly + $hoa;
    if($tongdiem >= $diemchuan){
        $kq = 'Đậu';
    }else{
        $kq = 'Trượt';
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 8</title>
</head>
<style>
    body{
        font-size: 1.2vw;
    }
    caption{
        background-color: red;
        color: wheat;
        text-transform: uppercase;
    }
    table{
        margin: auto;
        background-color: pink;
        height: max-content;
        border-collapse: collapse;
    }
    tr{
        height: 5vh;
    }
    td, th{
        padding: 10px;
    }
    .readonly{
        background-color: bisque;
    }
</style>
<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Kết quả thi đại</caption>
            <tr>
                <th>Toán</th>
                <td>
                    <input type="text" name="toan" value="<?php echo $toan;  ?>">
                </td>
            </tr>
            <tr>
                <th>Lý</th>
                <td>
                    <input type="text" value="<?php echo $ly; ?>" name="ly">
                </td>
            </tr>
            <tr>
                <th>Hóa</th>
                <td>
                    <input type="text" value="<?php echo $hoa; ?>" name="hoa">
                </td>
            </tr>
            <tr>
                <th>Điểm chuẩn</th>
                <td>
                    <input type="text" value="<?php echo $diemchuan; ?>" name="diemchuan" style="color: red;">
                </td>
            </tr>
            <tr>
                <th>Tổng điểm</th>
                <td>
                    <input type="text" value="<?php echo $tongdiem; ?>" name="tongdiem" class="readonly" readonly>
                </td>
            </tr>
            <tr>
                <th>Kết quả thi</th>
                <td>
                    <input type="text" value="<?php echo $kq; ?>" name="kq" class="readonly" readonly>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Xem kết quả" name="">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>

</script>

</html>