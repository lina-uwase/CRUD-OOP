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
			if (isset($_POST['fname'] , $_POST['lname'] , $_POST['phone'], $_POST['gender'], $_POST['nationality'], $_POST['uname'], $_POST['email'], $_POST['password'], $_POST['added_time'])) {
				if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['phone']) && !empty([$_POST['gender']]) && !empty([$_POST['nationality']]) && !empty([$_POST['uname']]) && !empty([$_POST['email']]) && !empty([$_POST['password']]) && !empty([$_POST['added_time']])){
				
			     $fname = $_POST['fname'];
			     $lname = $_POST['lname'];
			     $phone = $_POST['phone'];
			     $gender = $_POST['gender'];
			     $nationality = $_POST['nationality'];
			     $uname = $_POST['uname']; 
			     $email = $_POST['email']; 
			     $password = $_POST['password']; 
			     $added_time = $_POST['added_time']; 
				
					$query = "INSERT INTO users (firstName,lastName,telephone,gender, nationality,username,email,password,added_time) VALUES ('$fname','$lname','$phone','$gender','$nationality','$uname','$email','$password','$added_time')";
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



