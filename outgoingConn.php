<?php
class model{
	private $server='localhost';
	private $username = 'root';
	private $password = '';
	private $db='stockManagementdb';
	private $conn;

	public function __construct()
	{
	try{
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
	}	catch(Exception $e){
		echo "Connection failed" .$e->getMessage();
	}
	}
	public function insert(){

		if (isset($_POST['submit'])) {
			if (isset($_POST['productId']) && isset($_POST['quantity']) && isset($_POST['added_date'])) {
				
				if (!empty($_POST['productId']) && !empty($_POST['quantity']) && !empty($_POST['added_date']) ) {
				
					 $productId = $_POST['productId'];
					  $quantity = $_POST['quantity'];
					  $added_date = $_POST['added_date'];
				
					$query = "INSERT INTO outgoing (productId,quantity,added_date) VALUES ('$productId','$quantity','$added_date')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						// echo "<script>window.location.href = 'index.php';</script>";
					}else{
						echo "<script>alert(".mysqli_error($this->conn).");</script>";
						// echo "<script>window.location.href = 'index.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					// echo "<script>window.location.href = 'index.php';</script>";

					
				}
			}
		}
}
}


?>



