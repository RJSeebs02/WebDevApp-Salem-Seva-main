<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
?>
<html>
    <head>
        <title>Reservation</title>
        <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
    </head>
<body>
    <div class="reserve">
        <h1>Reserve Here</h1>
        <form action="index.php?page=reserve&subpage=submit" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" class="text" name="fname" placeholder="Enter First Name" required>
            <br><br>
            <label for="mname">Middle Name:</label>
            <input type="text" id="mname" class="text" name="mname" placeholder="Enter Middle Name" required>
            <br><br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" class="text" name="lname" placeholder="Enter Last Name" required>
            <br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" class="text" name="email" placeholder="Enter Email..." required>
            <br><br>
            <label for="cnumber">Contact Number:</label>
            <input type="text" id="cnumber" class="text" name="cnumber" placeholder="Enter Contact Number..." required>
            <br><br>
            <label for="room">Available Rooms</label>
            <select name="room" id="room">
                <option value="Room 100">Room 100</option>
                <option value="Room 200">Room 200</option>
                <option value="Room 300">Room 300</option>
            </select>
            <br><br><br>
            <input type="submit" value="SUBMIT">
        </div>
        </form>
    </div>
     <?php
      switch($subpage){
                case 'submit':
                    require_once 'reserve-module/reserve-con.php';
                break; 
                case 'customers':
                    require_once 'customers-module/index.php';
                break; 
                case 'module_xxx':
                    require_once 'module-folder';
                break; 
                default:
                    require_once 'index.php';
                break; 
            }
    ?>
</body>
</html>