<html>
    <head>
        <title>Reservation</title>
    </head>
<body>
    <div class="admin">
        <h1>Add Admin</h1>
        <form action="processes/process.admin.php?action=new" method="post">
			<label for="adm_username">Username: </label>
			<input type="text" id="adm_username" class="text" name="adm_username" placeholder="Enter Username..." required>
			
			<label for="adm_fname">First Name: </label>
			<input type="text" id="adm_fname" class="text" name="adm_fname" placeholder="Enter First Name..." required>
				<br><br>
			<label for="adm_password">Password: </label>
		    <input type="text" id="adm_password" class="text" name="adm_password" placeholder="Enter Password..." required>
			
			<label for="adm_lname">Last Name: </label>
			<input type="text" id="adm_lname" class="text" name="adm_lname" placeholder="Enter Last Name..." required>
				<br><br>
			<label for="adm_email">Email Address: </label>
		    <input type="text" id="adm_email" class="text" name="adm_email" placeholder="Enter Email Address..." required>
				<br><br>
			
			<label for="adm_cnumber">Contact Number: </label>
			<input type="text" id="adm_cnumber" class="text" name="adm_cnumber" placeholder="Enter Contact Number..." required>
				<br><br><br>
			<input type="submit" class="button" value="SUBMIT">
		</form>
    </div>
</body>
</html>