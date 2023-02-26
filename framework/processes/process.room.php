<?php
include '../class/class.room.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id= isset($_GET['id']) ? $_GET['id'] : '';
$status= isset($_GET['status']) ? $_GET['status'] : '';

switch($action){
	case 'new':
        create_new_room();
	break;
    case 'update':
        update_room();
	break;
    case 'status':
        change_customer_status();
	break;
    case 'updatepassword':
        change_customer_password();
	break;
    case 'updateemail':
        change_customer_email();
	break;
}

function create_new_room(){
    $room = new Room();
    $number = $_POST['room_number'];
    $type = ucfirst($_POST['room_type']);
    $description = ucfirst($_POST['room_desc']);
    $price = ucfirst($_POST['room_price']);
    $floor = ucfirst($_POST['room_floor']);

    $result = $room->new_room($number,$type,$description,$price,$floor);
    if($result){
        $id = $room->get_room_id($id);
        header("location: ../index.php?page=rooms&subpage=records");
    }
}

function update_room(){  
    $room = new Room();
    $number = $_POST['room_number'];
    $type = ucfirst($_POST['room_type']);
    $description = ucfirst($_POST['room_desc']);
    $price = ucfirst($_POST['room_price']);
    $floor = ucfirst($_POST['room_floor']);
    
    $result = $room->update_room($number,$type,$description,$price,$floor);
    if($result){
        header('location: ../index.php?page=settings&subpage=rooms&action=profile&id='.$room_id);
    }
}

function change_customer_status(){
	$customer = new Customer();
    $id= isset($_GET['cust_id']) ? $_GET['cust_id'] : '';
    $status= isset($_GET['status']) ? $_GET['status'] : '';
    $result = $user->change_customer_status($id,$status);
    if($result){
        header('location: ../index.php?page=settings&subpage=users&action=profile&id='.$id);
    }
}

function change_customer_password(){
	$user = new User();
    $id = $_POST['cust_id'];
    $current_password = $_POST['crpassword'];
    $new_password = $_POST['npassword'];
    $confirm_password = $_POST['copassword'];
    $result = $user->change_password($id,$new_password);
    if($result){
        header('location: ../index.php?page=settings&subpage=users&action=profile&id='.$id);
    }
}

function change_user_email(){
	$user = new User();
    $id = $_POST['cust_id'];
    $current_email = $_POST['useremail'];
    $new_email = $_POST['newemail'];
    $current_password = $_POST['crpassword'];
    $result = $user->change_email($id,$new_email);
    if($result){
        header('location: ../index.php?page=settings&subpage=users&action=profile&id='.$id);
    }
}
