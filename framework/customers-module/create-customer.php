<html>
    <head>
        <title>Customer</title>
    </head>
<body>
    <div class="customer">
        <h1>Add Customer</h1>
        <form action="processes/process.customer.php?action=new" method="post">
			<label for="fname">First Name: </label>
			<input type="text" id="fname" class="text" name="cust_fname" placeholder="Enter First Name..." required>
				
			<label for="mname">Middle Name: </label>
		    <input type="text" id="mname" class="text" name="cust_mname" placeholder="Enter Middle Name..." required>
				
			<label for="lname">Last Name: </label>
		    <input type="text" id="lname" class="text" name="cust_lname" placeholder="Enter Last Name..." required>
				<br><br>
			<label for="email">Email Address: </label>
			<input type="text" id="email" class="text" name="cust_email" placeholder="Enter Email Address..." required>
				<br><br>
			<label for="address">Home Address: </label>
			<input type="text" id="address" class="text" name="cust_address" placeholder="Enter Home Address..." required>
				<br><br>
			<label for="cnumber">Contact Number: </label>
			<input type="text" id="cnumber" class="text" name="cust_cnumber" placeholder="Enter Contact Number..." required>
				<br><br><br>
			<input type="submit" class="button" value="SUBMIT">
		</form>
    </div>
</body>
</html>