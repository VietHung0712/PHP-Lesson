<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $r = $_POST['r'];
    $cv = 2 * 3.14 * $r;
    $dt = 3.14 * pow($r, 2);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
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
    .result{
        background-color: hotpink;
    }
</style>
<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Diện tích và chu vi hình tròn</caption>
            <tr>
                <th>Bán kính</th>
                <td>
                    <input type="number" name="r" id="" value="<?php echo $r;  ?>">
                </td>
            </tr>
            <tr>
                <th>Chu vi</th>
                <td>
                    <input type="number" name="cv" class="result" value="<?php echo $cv;  ?>" id="">
                </td>
            </tr>
            <tr>
                <th>Diện tích</th>
                <td>
                    <input type="number" value="<?php echo $dt;  ?>" class="result" name="dt" readonly>
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