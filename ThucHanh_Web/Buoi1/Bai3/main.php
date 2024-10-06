<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $old_index = $_POST['old_index'];
    $new_index = $_POST['new_index'];
    $dongia = $_POST['dongia'];
    $thanhtien = ($new_index - $old_index) * $dongia;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<style>
    body {
        font-size: 1.2vw;
    }

    caption {
        text-transform: uppercase;
        background-color: orange;
        color: red;
    }

    table {
        margin: auto;
        background-color: wheat;
        height: max-content;
    }

    tr {
        height: 5vh;
    }

    .result {
        background-color: hotpink;
    }
</style>

<body>
    <form action="main.php" method="POST">
        <table>
            <caption>Thanh toán tiền điện</caption>
            <tr>
                <th>Tên chủ hộ</th>
                <td>
                    <input type="text" name="name" value="<?php echo $name;  ?>">
                </td>
            </tr>
            <tr>
                <th>Chỉ số cũ</th>
                <td>
                    <input type="number" name="old_index" value="<?php echo $old_index;  ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <th>Chỉ số mới</th>
                <td>
                    <input type="number" name="new_index" value="<?php echo $new_index;  ?>">
                </td>
                <td>
                    (Kw)
                </td>
            </tr>
            <tr>
                <th>Đơn giá</th>
                <td>
                    <input type="number" value="2000" name="dongia" readonly>
                </td>
                <td>
                    (VND)
                </td>
            </tr>
            <tr>
                <th>Số tiền thanh toán</th>
                <td>
                    <input type="number" value="<?php echo $thanhtien;  ?>" name="thanhtien" class="result" readonly>
                </td>
                <td>(VND)</td>
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
        $$("input[type='text']").forEach(element => {
            element.value = '';
        });
    };
</script>

</html>