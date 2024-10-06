

<?php 
	$this_id = $_GET['this_id'];
	include 'Connect.php';
	$sql = "DELETE FROM bang WHERE ID ='$this_id'";
	$result = $connect->query($sql);
	if($result){
		echo "Xóa thành công!";
	}else{
		echo "Không thành công!";
	}
	$connect->close();
 ?>
 <span><a style="background-color:black;color:white;padding: 3px;" href="List.php">cancel</a></span>