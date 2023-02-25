<?php
include '../class/class.admin.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id= isset($_GET['id']) ? $_GET['id'] : '';
$status= isset($_GET['status']) ? $_GET['status'] : '';

switch($action){
	case 'new':
        create_new_admin();
	break;
    case 'update':
        update_admin();
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

function create_new_admin(){
    $admin = new Admin();
    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];
    $email = $_POST['adm_email'];
    $fname = ucfirst($_POST['adm_fname']);
    $lname = ucfirst($_POST['adm_lname']);
    $cnumber = $_POST['adm_cnumber'];

    $result = $admin->new_admin($username,$password,$email,$fname,$lname,$cnumber);
    if($result){
        $username = $admin->get_username($username);
        header("location: ../index.php?page=admins");
    }
}

function update_admin(){  
    $admin = new Admin();
    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];
    $email = $_POST['adm_email'];
    $fname = ucfirst($_POST['adm_fname']);
    $lname = ucfirst($_POST['adm_lname']);
    $cnumber = $_POST['adm_cnumber'];
    
    $result = $admin->new_admin($username,$password,$email,$fname,$lname,$cnumber);
    if($result){
        header('location: ../index.php?page=admins&subpage=update&id='.$username);
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
