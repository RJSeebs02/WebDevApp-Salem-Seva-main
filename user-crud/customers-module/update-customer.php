<?php
require_once "config/config.php";

?>
<html>
    <head>
        <title>Customer</title>
    </head>
<body>


    <div class="customer">
        <h1>Update Customer</h1>
        <form method="post">
		<?php
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	if(isset($_GET['cust-id']))
	{
		$id = mysqli_real_escape_string($con, $_GET['cust_id']);
		$sql = "SELECT * FROM customer WHERE cust_id = $id";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($sql) > 0){
			$customer = mysqli_fetch_array($sql);
			
		?>
			<label for="cust_fname">First Name: </label>
			<input type="text" id="cust_fname" class="text" name="cust_fname" placeholder="Enter First Name..." required>
				<br><br>
			<label for="cust_mname">Middle Name: </label>
		    <input type="text" id="cust_mname" class="text" name="cust_mname" placeholder="Enter Middle Name..." required>
				<br><br>
			<label for="cust_lname">Last Name: </label>
		    <input type="text" id="cust_lname" class="text" name="cust_lname" placeholder="Enter Last Name..." required>
				<br><br>
			<label for="cust_email">Email Address: </label>
			<input type="text" id="cust_email" class="text" name="cust_email" placeholder="Enter Email Address..." required>
				<br><br>
			<label for="cust_address">Home Address: </label>
			<input type="text" id="cust_address" class="text" name="cust_address" placeholder="Enter Home Address..." required>
				<br><br>
			<label for="cust_cnumber">Contact Number: </label>
			<input type="text" id="cust_cnumber" class="text" name="cust_cnumber" placeholder="Enter Contact Number..." required>
				<br><br><br>
			<input type="submit" value="SUBMIT">
			<?php
			}else{
			echo "No such id";
		}
	}
?>
		</form>
    </div>
</body>
</html>