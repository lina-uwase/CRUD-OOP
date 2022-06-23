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
			if (isset($_POST['productId']) && isset($_POST['quantity'])) {
				
				if (!empty($_POST['productId']) && !empty($_POST['quantity'])) {
				
					 $productId = $_POST['productId'];
					  $quantity = $_POST['quantity'];
					  
				
					$query = "INSERT INTO outgoing (productId,quantity) VALUES ('$productId','$quantity')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'outgoingRecord.php';</script>";
					}else{
						echo "<script>alert(".mysqli_error($this->conn).");</script>";
						echo "<script>window.location.href = 'outgoingRecord.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					echo "<script>window.location.href = 'outgoingRecord.php';</script>";

					
				}
			}
		}
    }
	public function fetch(){
    	$data = null;
    
    	$query= "SELECT * FROM outgoing";
    	if($sql = $this->conn->query($query)){
    		while($row = mysqli_fetch_assoc($sql)){
    			$data[]=$row;
    	}
    	return $data;
		
    }
}

	


	public function delete($outgoingId){

		$this->productId = $outgoingId;

			$query = "DELETE FROM outgoing where outgoingId = '$this->outgoingId'";
			$sql = mysqli_query($this->conn, $query);

			if ($sql) {
				return true;
			}else{
				return false;
			}
		}
	}

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






?>



