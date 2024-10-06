<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản li</title>
	<style type="text/css">
		td,th{
			padding: 10px 20px;
			text-align: left;
		}
		.main{
			width: 100%;
			text-align: center;
			font-size: 20px;
		}
		.opition{
			text-decoration: none;
			background-color: red;
			color: white;
			padding: 3px;
		}
		.divlink{
			position: relative;
			width: 300px;
			height: 100px;
			margin-left: calc(50% - 150px);
			background-color: rgba(0, 0, 0, 0.3);
			border: 2px solid black;
			&>a{
				position: absolute;
				left: 0;
				top: 0;
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
	</style>
</head>
<body>
	<div class="main">
		<?php
			include 'function.php';
			include 'Run.php';

			$sql = "SELECT * FROM bang";
			$result = $connect->query($sql);
			if ($result){
		?>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên</th>
							<th>Giới tính</th>
							<th>Ngày sinh</th>
							<th>Tùy chọn</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($row = $result->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $row['ID']; ?></td>
						<td><?php echo $row['NAME']; ?></td>
						<td><?php echo $row['GENDER']; ?></td>
						<td><?php echo transdate($row['BIRTHDAY']); ?></td>
						<td><span>
							<a class="opition" href="Delete.php?this_id=<?php echo $row['ID'] ?>" >
									Xóa
							</a>
							</span>
						</td>
						<br><br>
					</tr>
					<?php
						}
						$connect->close();
					?>
					</tbody>
				</table>
		<?php
			}
		?>
	</div>
	<button class="divlink"><a href="Design.php">Quay Lại</a></button>
</body>
</body>
</html>