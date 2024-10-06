<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ca = $_POST['ca'];
    $cb = $_POST['cb'];
    $ch = sqrt(pow($ca, 2) + pow($cb, 2));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
</head>
<style>
    body{
        font-size: 1.2vw;
    }
    caption{
        text-transform: uppercase;
        background-color: orange;
        color: red;
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
            <caption>Cạnh huyền tam giác vuông</caption>
            <tr>
                <th>Cạnh A</th>
                <td>
                    <input type="number" name="ca" value="<?php echo $ca;  ?>">
                </td>
            </tr>
            <tr>
                <th>Cạnh B</th>
                <td>
                    <input type="number" name="cb" value="<?php echo $cb;  ?>">
                </td>
            </tr>
            <tr>
                <th>Cạnh huyền</th>
                <td>
                    <input type="number" value="<?php echo $ch;  ?>" name="dt" style="background-color: hotpink;" readonly>
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