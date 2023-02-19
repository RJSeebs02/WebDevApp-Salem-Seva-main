<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
	</head>
	<body>
		<div class="room">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1>List of Rooms</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
						
						<table class="table table-bordered table-striped">
							<thead>
								<th>Room ID&nbsp&nbsp</th>
								<th>Room Number&nbsp&nbsp</th>
								<th>Room Type&nbsp&nbsp</th>
								<th>Room Description&nbsp&nbsp</th>
								<th>Room Price&nbsp&nbsp</th>
								<th>Room Floor&nbsp&nbsp</th>
								<th>Operations</th>
							</thead>
							<tbody>
								<?php
								$conn = mysqli_connect("localhost", "root", "", "test");
								
								$query = "SELECT * FROM room";
								$query_run = mysqli_query($conn, $query);
	
								if(mysqli_num_rows($query_run) > 0)
								{
									foreach($query_run as $row)
									{
										?>
											<tr>
												<td><?= $row['room_id']; ?> &nbsp&nbsp </td>
												<td><?= $row['room_number']; ?> &nbsp&nbsp </td>
												<td><?= $row['room_type']; ?> &nbsp&nbsp </td>
												<td><?= $row['room_desc']; ?> &nbsp&nbsp </td>
												<td>Php <?= $row['room_price']; ?> &nbsp&nbsp </td>
												<td><?= $row['room_floor']; ?> &nbsp&nbsp </td>
												<td><a class="btn-update" href="room-module/update-room.php?room_id=<?php echo $row['room_id']; ?>">Update</a>
												<a class="btn-delete" href="room-module/remove-room.php?room_id=<?php echo $row['room_id']; ?>">Delete</a></td>
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
<?php error_reporting(0);
    $number = $_POST['number'];
    $type = ucfirst($_POST['type']);
    $description = ucfirst($_POST['description']);
    $price = ucfirst($_POST['price']);
    $floor = ucfirst($_POST['floor']);

    //DB_Connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("Insert into room(number, type, description, price, floor) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("issds", $number, $type, $description, $price, $floor);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>