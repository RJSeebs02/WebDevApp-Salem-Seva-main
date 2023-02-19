<?php
include_once 'config/config.php';
include_once 'class/class.admin.php';

$admin = new Admin();
if($admin->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $admin->check_login($username,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_box'><div id='error_notif'>Wrong username or password.</div></div>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Login</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
<body>
	<div id="wrapper">
		<div id="login-box">
			<div id="login-main">
				<h1>LOGIN</h1>
				<form method="post">
					<div class="text_field">
						<input type="text" name="username" class="text" placeholder="Username" autocomplete="off" required>
					</div>
					<div class="text_field">
						<input type="password" name="password" class="text" placeholder="Password" autocomplete="off" required>
					</div>
					<div class="login-wrapper">
						<input type="Submit" name="submit" id="loginbutton" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>