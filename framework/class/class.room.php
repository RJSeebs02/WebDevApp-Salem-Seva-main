<?php
class Room{
	private $DB_SERVER='localhost';
	private $DB_USERNAME='root';
	private $DB_PASSWORD='';
	private $DB_DATABASE='test';
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE,$this->DB_USERNAME,$this->DB_PASSWORD);
		
	}
	
	public function new_room($rnumber,$rtype,$rdesc,$rprice,$rfloor){
		
		$data = [
			[$rnumber,$rtype,$rdesc,$rprice,$rfloor],
		];
		$stmt = $this->conn->prepare("INSERT INTO room (room_number, room_type, room_desc, room_price, room_floor) VALUES (?,?,?,?,?)");
		try {
			$this->conn->beginTransaction();
			foreach ($data as $row)
			{
				$stmt->execute($row);
			}
			$this->conn->commit();
		}catch (Exception $e){
			$this->conn->rollback();
			throw $e;
		}

		return true;

	}

	public function update_room($rnumber,$rtype,$rdesc,$rprice,$rfloor){
		
		$sql = "UPDATE room SET room_number=:room_number, room_type=:room_type, room_desc=:room_desc, room_price=:room_price, room_floor=:room_floor WHERE room_id=:room_id";

		$q = $this->conn->prepare($sql);
		$q->execute(array(':room_number'=>$rnumber, ':room_type'=>$rtype, ':room_desc'=>$rdesc,':room_price'=>$rprice,':room_floor'=>$rfloor));
		return true;
	}

	public function list_rooms(){
		$sql="SELECT * FROM room";
		$q = $this->conn->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){
		$data[]=$r;
		}
		if(empty($data)){
		   return false;
		}else{
			return $data;	
		}
	}
	function get_room_id($id){
		$sql="SELECT room_id FROM room WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_id = $q->fetchColumn();
		return $room_id;
	}
	function get_room_number($id){
		$sql="SELECT room_number FROM room WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_number = $q->fetchColumn();
		return $room_number;
	}
	function get_room_type($id){
		$sql="SELECT room_type FROM room WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_type = $q->fetchColumn();
		return $room_type;
	}
	function get_room_desc($id){
		$sql="SELECT room_desc FROM room WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_desc = $q->fetchColumn();
		return $room_desc;
	}
	function get_room_price($id){
		$sql="SELECT room_price FROM room WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_price = $q->fetchColumn();
		return $room_price;
	}
	function get_room_floor($id){
		$sql="SELECT room_floor FROM floor WHERE room_id = :room_id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['room_id' => $id]);
		$room_floor = $q->fetchColumn();
		return $room_floor;
	}
}