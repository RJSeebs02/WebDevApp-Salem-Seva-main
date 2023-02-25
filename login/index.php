<?php
/* include the class file (global - within application) */
include_once 'class/class.admin.php';
include_once 'class/class.customer.php';
include_once 'class/class.room.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';

$admin = new Admin();
$customer = new Customer();
$room = new Room();
if(!$admin->get_session()){
	header("location: login.php");
}
$adminpass = $admin->get_fname($_SESSION['adm_username']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
	<body>
	<div id="header">
			<h1>DRS</h1>
		</div>
		<div id="navbar">
			<div id="tabs">
				<ul>
					<a href="index.php">HOME</a>
					<a href="index.php?page=reserve">RESERVATION</a>
					<a href="index.php?page=customers">CUSTOMERS</a>
					<a href="index.php?page=rooms">ROOMS</a>
					<a href="index.php?page=admins">ADMINS</a>
					<a href="logout.php">LOGOUT</a>
				</ul>
			</div>
		</div>
		<div id="content">
			<?php
      switch($page){
                case 'reserve':
                    require_once 'reserve-module/index.php';
                break; 
                case 'customers':
                    require_once 'customers-module/index.php';
                break; 
                case 'rooms':
                    require_once 'room-module/index.php';
                break;
				case 'admins':
                    require_once 'admin-module/index.php';
                break; 
                default:
                    require_once 'index.php';
                break; 
            }
    ?>
		</div>

	</body>
</html>