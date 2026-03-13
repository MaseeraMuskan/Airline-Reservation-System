<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav">
<a href="booking.php">Book Flight</a>
<a href="view.php">View Bookings</a>
<a href="cancel.php">Cancel Booking</a>
<a href="Payment.php">Payment</a>
<a href="feedback.php">Feedback Page</a>
<a href="logout.php">Logout</a>
</div>

<h1 class="title">✈ Welcome to Airline Management System</h1>

</body>
</html>