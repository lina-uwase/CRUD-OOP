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
			if (isset($_POST['pname']) && isset($_POST['brand'])&& isset($_POST['sphone'])  && isset($_POST['added_date'])) {
				
				if(!empty($_POST['pname']) && !empty($_POST['brand']) && isset($_POST['sphone'])  && !empty($_POST['added_date']) ) {
					
					
				    $pname = $_POST['pname'];
				    $brand = $_POST['brand'];
				    $sphone = $_POST['sphone'];
				    $supplier = $_POST['supplier'];
				    $added_date = $_POST['added_date'];

					$query = "INSERT INTO products (product_name,brand,supplier_phone,supplier,added_date) VALUES ('$pname','$brand','$sphone','$supplier','$added_date')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
					}else{
						echo "(".mysqli_error($this->conn).");";
						echo "<script>window.location.href = 'index.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					echo "<script>window.location.href = 'index.php';</script>";

					
				}
			}
		}
}
}


?>



