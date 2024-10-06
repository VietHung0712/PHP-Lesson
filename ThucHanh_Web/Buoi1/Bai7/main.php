<?php
$hk1 = "";
$hk2 = "";
$dtb = '';
$kq = "";
$hl = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $hk1 = $_POST['hk1'];
    $hk2 = $_POST['hk2'];

    $dtb = ($hk1 + $hk2*2)/3;

    $kq = 'Được lên lớp';
    if($dtb < 5){
        $kq = 'Ở lại lớp!';
    }

    if($dtb >= 8){
        $hl = 'Giỏi';
    }elseif($dtb > 6.5 && $dtb < 8){
        $hl = 'Khá';
    }elseif($dtb >= 5 && $dtb <= 6.5){
        $hl = 'Trung bình';
    }else{
        $hl = 'Yếu';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 7</title>
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
            <caption>Kết quả học tập</caption>
            <tr>
                <th>Điểm HK1</th>
                <td>
                    <input type="text" name="hk1" value="<?php echo $hk1;  ?>">
                </td>
            </tr>
            <tr>
                <th>Điểm HK2</th>
                <td>
                    <input type="text" value="<?php echo $hk2; ?>" name="hk2">
                </td>
            </tr>
            <tr>
                <th>Điểm trung bình</th>
                <td>
                    <input type="text" value="<?php echo $dtb; ?>" name="dtb" class="readonly" readonly>
                </td>
            </tr>
            <tr>
                <th>Kết quả</th>
                <td>
                    <input type="text" value="<?php echo $kq; ?>" name="kq" class="readonly" readonly>
                </td>
            </tr>
            <tr>
                <th>Xếp loại học lực</th>
                <td>
                    <input type="text" value="<?php echo $hl; ?>" name="hl" class="readonly" readonly>
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