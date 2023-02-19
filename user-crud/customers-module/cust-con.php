<?php error_reporting(0);
    $fname = ucfirst($_POST['cust_fname']);
    $mname = ucfirst($_POST['cust_mname']);
    $lname = ucfirst($_POST['cust_lname']);
    $email = $_POST['cust_email'];
    $address = $_POST['cust_address'];
    $cnumber = $_POST['cust_cnumber'];

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into customer(cust_fname, cust_mname, cust_lname, cust_email, cust_address, cust_cnumber) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $fname, $mname, $lname, $email, $address, $cnumber);
        $stmt->execute();
        echo "Added Successfully";
        header("location: ../index.php?page=customers&subpage=records");
        $stmt->close();
        $conn->close();
    }
?>
