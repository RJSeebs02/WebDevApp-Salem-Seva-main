<?php
include '../class/class.customer.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id= isset($_GET['id']) ? $_GET['id'] : '';
$status= isset($_GET['status']) ? $_GET['status'] : '';

switch($action){
	case 'new':
        create_new_customer();
	break;
    case 'update':
        update_customer();
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

function create_new_customer(){
    $customer = new Customer();
    $fname = ucfirst($_POST['cust_fname']);
    $mname = ucfirst($_POST['cust_mname']);
    $lname = ucfirst($_POST['cust_lname']);
    $email = $_POST['cust_email'];
    $address = $_POST['cust_address'];
    $cnumber = $_POST['cust_cnumber'];

    $result = $customer->new_customer($fname,$mname,$lname,$email,$address,$cnumber);
    if($result){
        $id = $customer->get_cust_id($fname);
        header("location: ../index.php?page=customers&subpage=records");
    }
}

function update_customer(){  
    $customer = new Customer();
    $fname = ucfirst($_POST['cust_fname']);
    $mname = ucfirst($_POST['cust_mname']);
    $lname = ucfirst($_POST['cust_lname']);
    $email = $_POST['cust_email'];
    $address = $_POST['cust_address'];
    $cnumber = $_POST['cust_cnumber'];
    
    $result = $customer->update_customer($fname,$mname,$lname,$email,$address,$cnumber,$cust_id);
    if($result){
        header('location: ../index.php?page=customers&subpage=profile&id='.$cust_id);
        
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
