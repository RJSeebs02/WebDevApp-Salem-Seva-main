<?php error_reporting(0);
    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];
    $email = $_POST['adm_email'];
    $fname = ucfirst($_POST['adm_fname']);
    $lname = ucfirst($_POST['adm_lname']);
    $cnumber = $_POST['adm_cnumber'];

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into admin(adm_username, adm_password, adm_email, adm_fname, adm_lname, adm_cnumber) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $username, $password, $email, $fname, $lname, $cnumber);
        $stmt->execute();
        echo "Added Successfully";
        header("location: ../index.php?page=admins&subpage=records");
        $stmt->close();
        $conn->close();
    }
?>
