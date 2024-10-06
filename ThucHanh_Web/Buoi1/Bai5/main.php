<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a>$b){
        $max = $a;
    }else{
        $max = $b;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
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
        background-color: wheat;
        height: max-content;
    }
    tr{
        height: 5vh;
    }
    td, th{
        padding: 10px;
    }
</style>
<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Tìm số lớn hơn</caption>
            <tr>
                <th>Số A</th>
                <td>
                    <input type="number" name="a" value="<?php echo $a;  ?>">
                </td>
            </tr>
            <tr>
                <th>Số B</th>
                <td>
                    <input type="number" name="b" value="<?php echo $b;  ?>">
                </td>
            </tr>
            <tr>
                <th>Số lớn hơn</th>
                <td>
                    <input type="number" value="<?php echo $max;  ?>" name="max" style="background-color: hotpink;" readonly>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Tính" name="">
                    <input type="reset" value="Reset" onclick="resetForm(event)">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
    const $$ = document.querySelectorAll.bind(document);
    function resetForm(event) {
        event.preventDefault();
        $$("input[type='number']").forEach(element => {
            element.value = '';
        });
    };
</script>

</html>