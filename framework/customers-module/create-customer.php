<html>
    <head>
        <title>Customer</title>
    </head>
<body>
    <div class="customer">
        <h1>Add Customer</h1>
        <form action="customers-module/cust-con.php" method="post">
			<label for="cust_fname">First Name: </label>
			<input type="text" id="cust_fname" class="text" name="cust_fname" placeholder="Enter First Name..." required>
				
			<label for="cust_mname">Middle Name: </label>
		    <input type="text" id="cust_mname" class="text" name="cust_mname" placeholder="Enter Middle Name..." required>
				
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
			<input type="submit" class="button" value="SUBMIT">
		</form>
    </div>
</body>
</html>