<?php
session_start();
include "db.php";

$message = "";

if(isset($_POST['pay'])){

    $booking_id = $_POST['booking_id'] ?? "";
    $amount     = $_POST['amount'] ?? "";
    $method     = $_POST['method'] ?? "";

    if($booking_id != "" && $amount != "" && $method != ""){

        $message = "💳 Payment Successful! Your booking is confirmed.";

    } else {
        $message = "Please fill all payment details!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background: linear-gradient(to right, #1c92d2, #f2fcfe);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    padding:25px;
    width:350px;
    border-radius:10px;
    text-align:center;
    animation:fadeIn 1.5s;
}

input, select{
    width:90%;
    padding:8px;
    margin:6px 0;
}

button{
    width:100%;
    padding:10px;
    background:green;
    color:white;
    border:none;
    cursor:pointer;
}

button:hover{
    background:darkgreen;
}

.message{
    margin-bottom:10px;
    color:blue;
    font-weight:bold;
}

@keyframes fadeIn{
    from{opacity:0;}
    to{opacity:1;}
}
</style>

</head>

<body>

<div class="box">

<h2>💳 Payment Page</h2>

<?php if($message != "") { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>

<form method="POST">

<input type="number" name="booking_id" placeholder="Booking ID" required>

<input type="number" name="amount" placeholder="Enter Amount" required>

<select name="method" required>
    <option value="">Select Payment Method</option>
    <option>Credit Card</option>
    <option>Debit Card</option>
    <option>UPI</option>
    <option>Net Banking</option>
</select>

<button type="submit" name="pay">Pay Now</button>

</form>

</div>

</body>
</html>