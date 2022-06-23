<?php 
	include 'outgoingConn.php';
	$model = new Model();
	$productId = $_GET['outgoingId'];
	$delete = $model->delete($outgoingId);

	if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'outgoingRecord.php';</script>";
	}else {
		echo 'failed to delete user';
	}
	
 ?>