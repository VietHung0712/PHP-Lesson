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
		table{
			width: 100%;
			font-size: 20px;
		}
		.opition{
			text-decoration: none;
			color: white;
			padding: 3px;
			margin-right: 10px;
			background: rgba(0, 0, 0, 1);
		}
		.opition_del{
			background: red;
		}
		.opition_set{
			background: rgb(0, 100, 255);
		}
	</style>
</head>
<body>
		<?php
			include 'Connect.php';
			function transdate($a)
			{
				return date('d-m-Y',strtotime($a));
			}

			$sql = "SELECT * FROM bang";
			$result = $connect->query($sql);
			if($result->num_rows>0){
		?>
		<form action="" method="POST">
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
						<td>
							<span>
								<a class="opition opition_del" href="?this_id=<?php echo $row['ID'] ?>">Xóa</a>
							</span>
							<span>
								<a class="opition opition_set" href="Set.php?this_id=<?php echo $row['ID'] ?>">Sửa</a>
							</span>
						</td>
					</tr>
		<?php
			}
			if(isset($_GET['this_id'])){
				$this_id = $_GET['this_id'];
				$sql_dele = "DELETE FROM bang WHERE ID ='$this_id'";
				$result_dele = $connect->query($sql_dele);
				
			}
		?>
				</tbody>
			</table>
		</form>
		<?php
			}else{
				echo "Danh sách rỗng";
			}
			$connect->close();
		?>
	<span><a class="opition" href="Design.php">Quay Lại</a></span>
</body>
</body>
</html>