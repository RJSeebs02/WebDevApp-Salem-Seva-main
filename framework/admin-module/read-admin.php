<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
	</head>
	<body>
		<div class="admin">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>List of Admins</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
						
						<table class="table table-bordered table-striped">
							<thead>
								<th>Admin Username&nbsp&nbsp</th>
								<th>Admin Email&nbsp&nbsp</th>
								<th>First Name&nbsp&nbsp</th>
								<th>Last Name&nbsp&nbsp</th>
								<th>Contact Number&nbsp&nbsp</th>
								<th>Operations</th>
							</thead>
							<tbody>
								<?php
								$conn = mysqli_connect("localhost", "root", "", "test");
								
								$query = "SELECT * FROM admin";
								$query_run = mysqli_query($conn, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $row)
									{
										?>
											<tr>
												<td><?= $row['adm_username']; ?></td>
												<td><?= $row['adm_email']; ?></td>
												<td><?= $row['adm_fname']; ?></td>
												<td><?= $row['adm_lname']; ?></td>
												<td><?= $row['adm_cnumber']; ?></td>
												<td><a class="btn-update" href="admin-module/update-admin.php?adm_username=<?php echo $row['adm_username']; ?>">Update</a>
												<a class="btn-delete" href="admin-module/remove-admin.php?adm_username='<?php echo $row['adm_username']; ?>'">Delete</a></td>
											</tr>
										<?php
									}
								}
								else
								{
									?>
										<tr>
											<td colspan="7"No Record Found></td>		
										</tr>
									<?php
								}
											
								?>
							</tbody>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php error_reporting(0);
    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];
    $email = $_POST['adm_email'];
    $fname = ucfirst($_POST['adm_fname']);
    $lname = ucfirst($_POST['adm_lname']);
    $cnumber = $_POST['adm_cnumber'];

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into room(adm_username, adm_password, adm_email, adm_fname, adm_lname, adm_cnumber) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $username, $password, $email, $fname, $lname, $cnumber);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>