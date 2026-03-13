<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Book Flight - Airline System</title>
<link rel="stylesheet" href="style.css">

<style>
body{
    margin:0;
    font-family:Arial;
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:rgba(255,255,255,0.1);
    padding:30px;
    border-radius:15px;
    width:350px;
    backdrop-filter:blur(10px);
    animation:fadeIn 1.5s ease-in-out;
}

.box h2{
    color:white;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:none;
    border-radius:5px;
}

button{
    width:100%;
    padding:10px;
    background:#00c6ff;
    border:none;
    color:white;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#0072ff;
    transform:scale(1.05);
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(-20px);}
    to{opacity:1; transform:translateY(0);}
}
</style>

</head>

<body>

<div class="box">
<h2>✈ Book Your Flight</h2>

<form action="book.php" method="POST">

<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="text" name="from_city" placeholder="From City" required>
<input type="text" name="to_city" placeholder="To City" required>
<input type="date" name="travel_date" required>

<button type="submit">Book Now</button>

</form>

</div>

</body>
</html>