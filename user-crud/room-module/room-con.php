<?php error_reporting(0);
    $number = $_POST['room_number'];
    $type = ucfirst($_POST['room_type']);
    $description = ucfirst($_POST['room_desc']);
    $price = ucfirst($_POST['room_price']);
    $floor = ucfirst($_POST['room_floor']);

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into room(room_number, room_type, room_desc, room_price, room_floor) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("issds", $number, $type, $description, $price, $floor);
        $stmt->execute();
        echo "Added Successfully";
        header("location: ../index.php?page=rooms");
        $stmt->close();
        $conn->close();
    }
?>
