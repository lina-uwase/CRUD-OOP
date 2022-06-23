<?php 
	include 'productsConn.php';
	$model = new Model();
	$productId = $_GET['productId'];
	$delete = $model->delete($productId);

	if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'productsRecord1	.php';</script>";
	}else {
		echo 'failed to delete user';
	}
	echo "stock manafement";
 ?>