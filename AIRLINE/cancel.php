<?php
include "db.php";

if(isset($_POST['cancel'])){
$id=$_POST['id'];

mysqli_query($conn,"UPDATE booking1 SET status='Cancelled' WHERE id='$id'");
echo "<script>alert('Booking Cancelled');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cancel Booking</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
<h2>Cancel Booking</h2>

<form method="POST">
<input type="number" name="id" placeholder="Enter Booking ID" required>
<button name="cancel">Cancel</button>
</form>

</div>

</body>
</html>