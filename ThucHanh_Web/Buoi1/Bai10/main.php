<?php
$bd = $kt = $thanhtien = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $bd = $_POST['bd'];
    $kt = $_POST['kt'];

    if($bd > $kt || $bd < 10 || $kt > 24){
        echo "<script>alert('Thời gian sai quy định!');</script>";
    }else{
        if(is_numeric($bd) && is_numeric($kt)){
            if($bd < 17 && $kt <= 17){
                $thanhtien = ($kt - $bd) * 20000;
            }else if($bd < 17 && $kt > 17){
                $thanhtien = (17-$bd)*20000 + ($kt - 17)*45000;
            }else{
                $thanhtien = ($kt - $bd) * 45000;
            }
        }else{
            echo "<script>alert('Nhập dữ liệu theo định dạng số giờ!');</script>";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 10</title>
</head>
<style>
    body{
        font-size: 1.2vw;
    }
    caption{
        background-color: teal;
        color: white;
        text-transform: uppercase;
    }
    table{
        margin: auto;
        background-color: aqua;
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
            <caption>Tính tiền karaoke</caption>
            <tr>
                <th>Giờ bắt đầu</th>
                <td>
                    <input type="text" value="<?php echo $bd;  ?>" name="bd">
                </td>
                <td>(h)</td>
            </tr>
            <tr>
                <th>Giờ kết thúc</th>
                <td>
                    <input type="text" value="<?php echo $kt; ?>" name="kt">
                </td>
                <td>(h)</td>
            </tr>
            <tr>
                <th>Tiền thanh toán</th>
                <td>
                    <input type="text" value="<?php echo $thanhtien; ?>" name="thanhtien" class="readonly" readonly>
                </td>
                <td>(VND)</td>
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