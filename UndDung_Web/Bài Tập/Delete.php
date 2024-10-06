<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản Lí</title>
</head>
	<style type="text/css">
		.btnlink{
			position: relative;
			width: 300px;
			height: 100px;
			margin-left: calc(50% - 150px);
			background-color: rgba(0, 0, 0, 0.3);
			border: 2px solid black;
			&>a{
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				line-height: 100px;
				text-align: center;
				color: black;
				font-size: 20px;
				text-decoration: none;
			}
			&:hover{
				background-color: rgba(0, 0, 0, .7);
			}
		}
		.main{
			width: 100%;
			line-height: 100px;
			text-align: center;
			font-size: 30px;
		}
	</style>
<body>
	<div class="main">
		<?php
			include 'Run.php';
			$this_id = $_GET['this_id'];
			$sql = "DELETE FROM bang WHERE ID ='$this_id' ";
			if ($connect->query($sql) == TRUE) {
				echo "Đã xóa thành công ID = ".$this_id;
			}else{
				echo "Lỗi!";
			}
			$connect->close();
		?>
	</div>
	<button class="btnlink"><a href="Opition.php">Quay Lại</a></button>
</body>
</html>