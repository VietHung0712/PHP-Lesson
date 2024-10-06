<?php
$c1 = $c2 = $c3 = $loai = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];

    $loai = "tam giác thường";

    if (is_numeric($c1) && is_numeric($c2) && is_numeric($c3)) {
        if ($c1 == $c2 && $c1 != $c3 || $c1 == $c3 && $c1 != $c2 || $c2 == $c3 && $c2 != $c1) {
            $loai .= "cân";
        } else {
            $loai = str_replace("thường", "", $loai);
        }
        if ($c1 == $c2 && $c1 == $c3 && $c2 == $c3) {
            $loai .= "đều";
        } else {
            $loai = str_replace("thường", "", $loai);
        }
        if (pow($c1, 2) + pow($c2, 2) == pow($c3, 2) || pow($c1, 2) + pow($c3, 2) == pow($c2, 2) || pow($c3, 2) + pow($c2, 2) == pow($c1, 2)) {
            $loai .= "vuông";
        } else {
            $loai = str_replace("thường", "", $loai);
        }
    } else {
        echo "<script>alert('Nhập dữ liệu theo định dạng số giờ!');</script>";
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
        background-color: orange;
        color: red;
        text-transform: uppercase;
    }

    table {
        margin: auto;
        background-color: wheat;
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
        background-color: hotpink;
    }
</style>

<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Nhận dạng tam giác</caption>
            <tr>
                <th>Cạnh 1</th>
                <td>
                    <input type="text" value="<?php echo $c1;  ?>" name="c1">
                </td>
                <td>(cm)</td>
            </tr>
            <tr>
                <th>Cạnh 2</th>
                <td>
                    <input type="text" value="<?php echo $c2; ?>" name="c2">
                </td>
                <td>(cm)</td>
            </tr>
            <tr>
                <th>Cạnh 3</th>
                <td>
                    <input type="text" value="<?php echo $c3; ?>" name="c3">
                </td>
                <td>(cm)</td>
            </tr>
            <tr>
                <th>Loại tam giác</th>
                <td>
                    <input type="text" value="<?php echo $loai; ?>" name="thanhtien" class="readonly" readonly>
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