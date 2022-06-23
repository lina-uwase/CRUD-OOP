<?php
class model{
	private $server='localhost';
	private $username = 'root';
	private $password = '';
	private $db='Managementdb';
	private $productId;
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
			if( isset($_POST['product_Name']) && isset($_POST['brand'])&& isset($_POST['supplier_phone'])) {
				
				if(!empty($_POST['product_Name']) && !empty($_POST['brand']) && isset($_POST['supplier_phone'])) {
					
					
				    $pname = $_POST['product_Name'];
				    $brand = $_POST['brand'];
				    $sphone = $_POST['supplier_phone'];
				    $supplier = $_POST['supplier'];

					$query = "INSERT INTO products (product_Name,brand,supplier_phone,supplier) VALUES ('$pname','$brand','$sphone','$supplier')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'productsRecord1.php';</script>";
					}else{
						echo "(".mysqli_error($this->conn).");";
						echo "<script>window.location.href = 'productsRecord1.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					echo "<script>window.location.href = 'productsRecord1.php';</script>";
	
				}
			}
		}
}
    public function fetch(){
    	$data = null;
    
    	$query= "SELECT * FROM products";
    	if($sql = $this->conn->query($query)){
    		while($row = mysqli_fetch_assoc($sql)){
    			$data[]=$row;
    	}
    	return $data;
		
    }
 }
	public function delete($productId){

		$this->productId = $productId;

			$query = "DELETE FROM products where productId = '$this->productId'";
			$sql = mysqli_query($this->conn, $query);

			if ($sql) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM records WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}
 
		public function edit($id){

			$data = null;

			$query = "SELECT * FROM records WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
}
?>



