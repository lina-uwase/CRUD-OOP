<?php
class model{
	private $server='localhost';
	private $username = 'root';
	private $password = '';
	private $db='Managementdb';
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
			if (isset($_POST['quantity']) && isset($_POST['productId'])) {
				if (!empty($_POST['quantity']) && !empty($_POST['productId'])) {
				
					 $quantity = $_POST['quantity'];
					  $productId = $_POST['productId'];
					  
				
					$query = "INSERT INTO stk_inventory (quantity,productId) VALUES ('$quantity','$productId')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'stk_inventoryRecord.php';</script>";
					}else{
						echo "<script>alert(".mysqli_error($this->conn).");</script>";
						echo "<script>window.location.href = 'stk_inventoryRecord.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					echo "<script>window.location.href = 'stk_inventoryRecord.php';</script>";

					
				}
			}
		}
}
public function fetch(){
	$data = null;

	$query= "SELECT * FROM stk_inventory";
	if($sql = $this->conn->query($query)){
		while($row = mysqli_fetch_assoc($sql)){
			$data[]=$row;
	}
	return $data;
	
}


// public function delete($id){

// 		$query = "DELETE FROM records where id = '$id'";
// 		if ($sql = $this->conn->query($query)) {
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}

// 	public function fetch_single($id){

// 		$data = null;

// 		$query = "SELECT * FROM records WHERE id = '$id'";
// 		if ($sql = $this->conn->query($query)) {
// 			while ($row = $sql->fetch_assoc()) {
// 				$data = $row;
// 			}
// 		}
// 		return $data;
// 	}

// 	public function edit($id){

// 		$data = null;

// 		$query = "SELECT * FROM records WHERE id = '$id'";
// 		if ($sql = $this->conn->query($query)) {
// 			while($row = $sql->fetch_assoc()){
// 				$data = $row;
// 			}
// 		}
// 		return $data;
// 	}

// 	public function update($data){

// 		$query = "UPDATE records SET name='$data[name]', email='$data[email]', mobile='$data[mobile]', address='$data[address]' WHERE id='$data[id] '";

// 		if ($sql = $this->conn->query($query)) {
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}


}
}


?>



