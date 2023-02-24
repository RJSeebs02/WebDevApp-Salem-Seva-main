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
        							<th>Customer ID</th>
        							<th>Name</th>
        							<th>Email Address</th>
        							<th>Home Address</th>
									<th>Contact Number</th>
									<th>Operations</th>
								</thead>
								<?php
								$count = 1;
								$count = 1;
								if($customer->list_customers() != false){
								foreach($customer->list_customers() as $value){
   								extract($value);
  
								?>
								<tbody>
      								<tr>
        								<td><?php echo $cust_id;?></td>
        								<td><a href="#"><?php echo $cust_fname.' '.$cust_mname.' '.$cust_lname;?></a></td>
        								<td><?php echo $cust_email;?></td>
        								<td><?php echo $cust_address;?></td>
										<td><?php echo $cust_cnumber;?></td>
										<td><a class="btn-update" href="index.php?page=customers&subpage=update&option=update?cust_id=<?php echo $row['cust_id']; ?>">Update</a>
											<a class="btn-delete" href="customers-module/remove-customer.php?cust_id=<?php echo $row['cust_id']; ?>">Delete</a>
										</td>
									</tr>
								</tbody>
								<?php
 								$count++;
								}
								}else{
								?>
									<tr>
										<td colspan="7">"No Record Found.";</td>
									</tr>
								<?php
								}
								?>
    						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>