<?php 
	include 'Connect.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$sql = "INSERT INTO bang VALUES ('$id', '$name', '$gender', '$birthday')";
	$result = $connect->query($sql);
	if($result){
		echo "Thêm thành công!";
	}else{
		echo "Không thành công!";
	}
	$connect->close();
 ?>
 <span><a style="background-color:black;color:white;padding: 5px;" href="List.php">Danh sách</a></span>
 <span><a style="background-color:black;color:white;padding: 5px;" href="Design.php">Trang chủ</a></span>