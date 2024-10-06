<form action="" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="Nam" checked>Nam
				<input type="radio" name="gender" value="Nữ">Nữ
			</td>
		</tr>
		<tr>
			<td>Birthday</td>
			<td>
				<input type="date" name="birthday">
			</td>
		</tr>
			<td>
				<span>
					<input type="submit" name="submit" value="Sửa">
				</span>
			</td>
		</tr>
</table>
</form>
<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		include 'Connect.php';
		function transdate($a){
			return date('d-m-Y',strtotime($a));
		}
		$this_id = $_GET['this_id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		
		if(!empty($name)){
			$sql = "UPDATE bang SET NAME = '$name' WHERE ID = '$this_id'";
			$result = $connect->query($sql);
			if($result){
				echo "Sửa tên thành".$name." thành công!".'<br>';
			}else{
				echo "Không sửa tên thành công!".'<br>';
			}
		}
		if(!empty($birthday)){
			$sql = "UPDATE bang SET BIRTHDAY = '$birthday' WHERE ID = '$this_id'";
			$result = $connect->query($sql);
			if($result){
				echo "Sửa ngày sinh thành ".transdate($birthday)." thành công!".'<br>';
			}else{
				echo "Không sửa ngày sinh thành công!".'<br>';
			}
		}
		if(!empty($gender)){
			$sql = "UPDATE bang SET GENDER = '$gender' WHERE ID = '$this_id'";
			$result = $connect->query($sql);
			if($result){
				echo "Sửa giới tính thành " .$gender.  " thành công!".'<br>';
			}else{   
				echo "Không sửa giới tính thành công!".'<br>';
			}
		}
		$connect->close();
	}
?>
<span><a style="background-color:black;color:white;padding: 3px;" href="List.php">Quay lại</a></span>