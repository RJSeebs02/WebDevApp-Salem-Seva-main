<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
	<body>
		<div id="header">
			<h1>Dormitory Reservation System</h1>
		</div>
		<div id="navbar">
			<a href="main.php">Home</a>
			<a href="main.php?page=reserve">Reservation</a>
			<a href="main.php?page=customers">Customers</a>
			<a href="main.php?page=room">Rooms</a>
			<a href="index.php">Logout</a>
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
				case 'room':
                    require_once 'room-module/index.php';
                break;
                case 'module_xxx':
                    require_once 'module-folder';
                break; 
                default:
                    require_once 'main.php';
                break; 
            }
    ?>
		</div>

	</body>
</html>