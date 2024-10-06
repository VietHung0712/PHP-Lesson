<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản lí</title>
	<style type="text/css">
		.divlink{
			position: relative;
			width: 300px;
			height: 100px;
			margin-left: calc(50% - 150px);
			background-color: rgba(0, 0, 0, 0.3);
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
</head>
<body>
	<div class="main">
		<?php
			include 'Run.php';
			$id = $_POST['id'];
			$name = $_POST['name'];
			$gender = $_POST['gender'];
			$birthday = $_POST['birthday'];

			$sql = "INSERT INTO bang VALUES('$id','$name','$gender','$birthday')";
			$result = $connect ->query($sql);
				if($result){
					echo "Them thanh cong";
				}else{
					echo "Khong thanh cong";
				}
			$connect->close();
		?>
	</div>
	<button class="divlink"><a href="Opition.php">Danh sách</a></button>
</body>
</html>