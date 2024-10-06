<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design</title>
	<style type="text/css">
		table{
			width: 300px;
			margin: auto;
			border: 1px solid black;
			background-color: rgba(0, 0, 0, 0.3);
			border-spacing: 10px;
		}
		*{
			margin-bottom: 10px;
		}
		.input-text{
			border: none;
			border-bottom: 2px solid black;
		}
		.btn{
			cursor: pointer;
			color: black;
			width: 50px;
			background-color: rgba(0, 0, 0, 0.3);
			transform: translateX(50px);
			&:hover{
				background-color: rgba(0, 0, 0, 1);
				color: white;
			}
		}
		.btnlink{
			position: relative;
			width: 300px;
			height: 100px;
			margin-left: calc(50% - 150px);
			background-color: rgba(0, 0, 0, 0.3);
			&>a{
				position: absolute;
				top:0;
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
	</style>
</head>
<body>
	<form action="Add.php" method="POST">
		<table>
			<tr>
				<td>ID</td>
				<td><input class="input-text" type="text" name="id"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input class="input-text" type="text" name="name"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Nam">Nam
					<input type="radio" name="gender" value="Nữ">Nữ
				</td>
			</tr>
			<tr>
				<td>Birthday</td>
				<td><input class="input-text" type="date" name="birthday"></td>
			</tr>
			<tr>
				<td>
					<input class="btn" type="submit" name="submit" value="Add">
				</td>
				<td>
					<input class="btn" type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<button class="btnlink"><a href="Opition.php">Danh sách</a></button>
</body>
</body>
</html>