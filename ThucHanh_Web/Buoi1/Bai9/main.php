<?php
$a = '';
$b = '';
$kq = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    
    $kq = - $b / $a;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 9</title>
</head>
<style>
    body{
        font-size: 1.2vw;
    }
    caption{
        background-color: orange;
        color: red;
        text-transform: uppercase;
    }
    table{
        margin: auto;
        background-color: beige;
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
            <caption>Giải phương trình bậc nhất</caption>
            <tr>
                <th>Phương trình</th>
                <td>
                    <input type="number" name="a" width="2" value="<?php echo $a;  ?>">x+
                    <input type="number" name="b" width="2" value="<?php echo $b;  ?>">=0
                </td>
            </tr>
            <tr>
                <th>Nghiệm</th>
                <td>
                    <input type="text" value="<?php echo $kq; ?>" name="" readonly>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Giải phương trình" name="">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>

</script>

</html>