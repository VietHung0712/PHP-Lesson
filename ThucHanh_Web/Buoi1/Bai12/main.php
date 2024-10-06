<?php
$var = $kq = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $var = $_POST['var'];

    if (is_numeric($var)) {
        switch ($var) {
            case 0:
                $kq = "Không";
                break;
            case 1:
                $kq = "Một";
                break;
            case 2:
                $kq = "Hai";
                break;
            case 3:
                $kq = "Ba";
                break;
            case 4:
                $kq = "Bốn";
                break;
            case 5:
                $kq = "Năm";
                break;
            case 6:
                $kq = "Sáu";
                break;
            case 7:
                $kq = "Bảy";
                break;
            case 8:
                $kq = "Tám";
                break;
            case 9:
                $kq = "Chín";
                break;
        }
    } else{
        echo "<script>alert('Is not number!')</script>";
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
    body {
        font-size: 1.2vw;
    }

    caption {
        background-color: teal;
        color: white;
        text-transform: uppercase;
    }

    table {
        margin: auto;
        background-color: aqua;
        height: max-content;
        border-collapse: collapse;
    }

    tr {
        height: 5vh;
    }

    td,
    th {
        padding: 10px;
    }

    .readonly {
        background-color: bisque;
    }
</style>

<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Đọc số</caption>
            <tr>
                <th>Nhập số(0->9)</th>
                <td>
                    <input type="text" value="<?php echo $var;  ?>" name="var" required>
                </td>
            </tr>
            <tr>
                <th>Bằng chữ</th>
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