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
						<h1>List of Admins</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
    							<thead>
        							<th>Admin Username</th>
        							<th>Admin Email</th>
        							<th>Admin Name</th>
									<th>Contact Number</th>
									<th>Operations</th>
								</thead>
								<?php
								$count = 1;
								$count = 1;
								if($admin->list_admins() != false){
								foreach($admin->list_admins() as $value){
   								extract($value);
  
								?>
								<tbody>
      								<tr>
        								<td><?php echo $adm_username;?></td>
										<td><?php echo $adm_email;?></td>
        								<td><a href="#"><?php echo $adm_fname.' '.$adm_lname;?></a></td>
										<td><?php echo $adm_cnumber;?></td>
										<td><a class="btn-update" href="index.php?page=customers&subpage=update?cust_id=<?php echo $cust_id; ?>">Update</a>
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
										<td colspan="7">"No Record Found."</td>
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