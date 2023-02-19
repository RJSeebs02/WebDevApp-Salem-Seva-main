<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
	</head>
	<body>
		<div class="customer">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>List of Customers</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
					
						<table class="table table-bordered table-striped">
							<thead>
								<th>Customer ID&nbsp&nbsp</th> 
								<th>First Name&nbsp&nbsp</th>
								<th>Middle Name&nbsp&nbsp</th>
								<th>Last Name&nbsp&nbsp</th>
								<th>Email Address&nbsp&nbsp</th>
								<th>Home Address&nbsp&nbsp</th>
								<th>Contact Number&nbsp&nbsp</th>
								<th>Operations</th>
							</thead>
							<tbody>
								<?php
								$conn = mysqli_connect("localhost", "root", "", "test");

								$query = "SELECT * FROM customer";
								$query_run = mysqli_query($conn, $query);

								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $row)
									{
										?>
											<tr>
												<td><?= $row['cust_id']; ?></td>
												<td><?= $row['cust_fname']; ?></td>
												<td><?= $row['cust_mname']; ?></td>
												<td><?= $row['cust_lname']; ?></td>
												<td><?= $row['cust_email']; ?></td>
												<td><?= $row['cust_address']; ?></td>
												<td><?= $row['cust_cnumber']; ?></td>
												<td><a class="btn-update" href="index.php?page=customers&subpage=update&option=update?cust_id=<?php echo $row['cust_id']; ?>">Update</a>
													<a class="btn-delete" href="customers-module/remove-customer.php?cust_id=<?php echo $row['cust_id']; ?>">Delete</a></td>
											</tr>
										<?php
									}
								}
								else
								{
									?>
										<tr>
											<td colspan="7">No Record Found</td>		
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