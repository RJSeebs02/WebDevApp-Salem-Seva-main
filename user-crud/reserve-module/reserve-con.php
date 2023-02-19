<?php error_reporting(0);
    $fname = ucfirst($_POST['fname']);
    $mname = ucfirst($_POST['mname']);
    $lname = ucfirst($_POST['lname']);
    $email = $_POST['email'];
    $cnumber = $_POST['cnumber'];
    $room = ucfirst($_POST['room']);

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into reserve(fname, mname, lname, email, cnumber, room) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssis", $fname, $mname, $lname, $email, $cnumber, $room);
        $stmt->execute();
        echo "Registered Successfully";
        $stmt->close();
        $conn->close();
    }
?>