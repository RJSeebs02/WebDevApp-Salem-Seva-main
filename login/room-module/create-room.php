<html>
    <head>
        <title>Reservation</title>
    </head>
<body>
    <div class="room">
        <h1>Add Room</h1>
        <form action="room-module/room-con.php" method="post">
			<label for="room_number">Room Number: </label>
			<input type="text" id="room_number" class="text" name="room_number" placeholder="Enter Room Number..." required>
				
			<label for="room_type">Room Type: </label>
		    <input type="text" id="room_type" class="text" name="room_type" placeholder="Enter Room Type..." required>
				<br><br>
			<label for="room_desc">Description: </label>
			<input type="text" id="room_desc" class="text" name="room_desc" placeholder="Add Description..." required>
				<br><br>
			<label for="room_price">Price: </label>
			<input type="text" id="room_price" class="text" name="room_price" placeholder="Enter Price..." required>
				<br><br>
			<label for="room_floor">Room Floor: </label>
			<input type="text" id="room_floor" class="text" name="room_floor" placeholder="Enter Room Floor..." required>
				<br><br><br>
			<input type="submit" class="button" value="SUBMIT">
		</form>
    </div>
</body>
</html>