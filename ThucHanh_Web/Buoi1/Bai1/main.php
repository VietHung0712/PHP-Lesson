<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cd = $_POST['cd'];
    $cr = $_POST['cr'];
    $dt = $cd * $cr;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
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
</style>
<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Diện tích hình chữ nhật</caption>
            <tr>
                <th>Chiều dài</th>
                <td>
                    <input type="number" name="cd" id="" value="<?php echo $cd;  ?>">
                </td>
            </tr>
            <tr>
                <th>Chiều rộng</th>
                <td>
                    <input type="number" name="cr" value="<?php echo $cr;  ?>" id="">
                </td>
            </tr>
            <tr>
                <th>Diện tích</th>
                <td>
                    <input type="number" value="<?php echo $dt;  ?>" name="dt" style="background-color: hotpink;" readonly>
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Tính" name="" id="">
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