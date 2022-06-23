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
			if (isset($_POST['firstName'] , $_POST['lastName'] , $_POST['telephone'], $_POST['gender'], $_POST['nationality'], $_POST['username'], $_POST['email'], $_POST['password'])) {
				if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['telephone']) && !empty([$_POST['gender']]) && !empty([$_POST['nationality']]) && !empty([$_POST['username']]) && !empty([$_POST['email']]) && !empty([$_POST['password']])){
				
			      $fname = $_POST['firstName'];
			      $lname = $_POST['lastName'];
			      $phone = $_POST['telephone'];
			      $gender = $_POST['gender'];
			      $nationality = $_POST['nationality'];
			      $uname = $_POST['username']; 
			      $email = $_POST['email']; 
			      $password = $_POST['password']; 
			     
				
					$query = "INSERT INTO users (firstName,lastName,telephone,gender, nationality,username,email,password) VALUES ('$fname','$lname','$phone','$gender','$nationality','$uname','$email','$password')";
					if($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'userRecord.php';</script>";
					}else{
						echo "<script>alert(".mysqli_error($this->conn).");</script>";
						echo "<script>window.location.href = 'userRecord.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
 					echo "<script>window.location.href = 'userRecord.php';</script>";
			}
			}
		}
}
public function fetch(){
	$data = null;

	$query= "SELECT * FROM users";
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



