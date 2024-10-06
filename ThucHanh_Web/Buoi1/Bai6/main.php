<?php
$hour = '';
$text = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hour = $_POST['hour'];
    
    if($hour >= 0 && $hour < 13){
        $text = 'Chào buối sáng!'; 
    }else if($hour >=13 && $hour < 18){
        $text = 'Chào buối chiều!'; 
    }else{
        $text = 'Chào buối tối!'; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 6</title>
</head>
<style>
    body{
        font-size: 1.2vw;
    }
    caption{
        background-color: dodgerblue;
        color: blue;
        text-transform: uppercase;
    }
    table{
        margin: auto;
        background-color: aquamarine;
        height: max-content;
        border-collapse: collapse;
    }
    tr{
        height: 5vh;

        &:last-child{
            background-color: dodgerblue;
            width: 100%;

        }
    }
    td, th{
        padding: 10px;
    }
</style>
<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Chào theo giờ</caption>
            <tr>
                <th>Nhập giờ</th>
                <td>
                    <input type="number" name="hour" value="<?php echo $hour;  ?>">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="text" value="<?php echo $text; ?>" name="text" style="background-color: #00000000; border: none;" readonly>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="Chào" name="">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>

</script>

</html>