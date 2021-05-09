<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password;
		private $db = "hotel";
		private $conn;

		public function __construct(){
			try {
				
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function insert(){

			if (isset($_POST['submit'])) {
				if (isset($_POST['name']) && isset($_POST['room']) && isset($_POST['bed']) && isset($_POST['breakfast']) && isset($_POST['half'])&& isset($_POST['full'])) {
					if (!empty($_POST['name']) && !empty($_POST['room']) && !empty($_POST['bed']) && !empty($_POST['breakfast']) && !empty($_POST['half']) && !empty($_POST['full'])) {
						
						$name = $_POST['name'];
						$room = $_POST['room'];
						$bed = $_POST['bed'];
						$breakfast = $_POST['breakfast'];
						$half = $_POST['half'];
						$full = $_POST['full'];

						$query = "INSERT INTO records (name,room,bed,breakfast,half,full) VALUES ('$name','$room','$bed','$breakfast','$half','$full')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'edit_room.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'edit_room.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'edit_room.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM records";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM records where id = '$id'";
			if ($sql = $this->conn->query($query)) {
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

			$query = "UPDATE records SET name='$data[name]',room='$data[room]', bed='$data[bed]', breakfast='$data[breakfast]', half='$data[half]', full='$data[full]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>