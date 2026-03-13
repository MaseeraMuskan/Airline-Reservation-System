<?php
include "db.php";
$result=mysqli_query($conn,"SELECT * FROM booking1");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Bookings</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Booking Details</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>From</th>
<th>To</th>
<th>Date</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['from_city']; ?></td>
<td><?php echo $row['to_city']; ?></td>
<td><?php echo $row['travel_date']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>