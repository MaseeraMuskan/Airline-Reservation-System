<?php
session_start();
include "db.php";

$message = "";

if(isset($_POST['submit'])){

    $name  = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $phone = $_POST['phone'] ?? "";
    $from  = $_POST['from_city'] ?? "";
    $to    = $_POST['to_city'] ?? "";
    $date  = $_POST['travel_date'] ?? "";
    $departure = $_POST['departure_time'] ?? "";
    $arrival   = $_POST['arrival_time'] ?? "";
    $airline   = $_POST['airline'] ?? "";
    $class     = $_POST['class'] ?? "";
    $seat      = $_POST['seat'] ?? "";

    if($name!="" && $email!="" && $phone!="" && $from!="" && $to!="" && $date!=""){

        $sql = "INSERT INTO booking1 
        (name,email,phone,from_city,to_city,travel_date)
        VALUES ('$name','$email','$phone','$from','$to','$date')";

        if(mysqli_query($conn,$sql)){
            $message = "✈ Booking Confirmed Successfully!";
        } else {
            $message = "Error: ".mysqli_error($conn);
        }

    } else {
        $message = "Please fill all required fields!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Official Airline Booking</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background:url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4') no-repeat center center fixed;
    background-size:cover;
}

.overlay{
    background:rgba(0,0,0,0.75);
    min-height:100vh;
    padding:20px;
}

.container{
    max-width:900px;
    margin:auto;
}

.form-box{
    background:white;
    padding:25px;
    border-radius:12px;
    animation:fadeIn 1.5s;
}

h1{
    text-align:center;
    color:white;
}

h2{
    text-align:center;
}

input, select{
    width:100%;
    padding:10px;
    margin:6px 0;
    border-radius:6px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:12px;
    background:#0072ff;
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-size:16px;
    transition:0.3s;
}

button:hover{
    background:#0056b3;
    transform:scale(1.05);
}

.success{
    text-align:center;
    color:lightgreen;
    font-weight:bold;
    margin-bottom:10px;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}
</style>

</head>

<body>

<div class="overlay">

<h1>✈ Official Airline Reservation System</h1>

<div class="container">

<div class="form-box">

<h2>Passenger Booking Details</h2>

<?php if($message!=""){ ?>
<div class="success"><?php echo $message; ?></div>
<?php } ?>

<form method="POST">

<!-- Passenger Details -->
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
<input type="text" name="phone" placeholder="Phone Number" required>

<!-- Flight Details -->
<input type="text" name="from_city" placeholder="Departure City" required>
<input type="text" name="to_city" placeholder="Arrival City" required>

<!-- Time Details -->
<input type="time" name="departure_time" required>
<input type="time" name="arrival_time" required>

<!-- Airline Selection -->
<select name="airline" required>
<option value="">Select Airline</option>
<option>IndiGo</option>
<option>Air India</option>
<option>SpiceJet</option>
<option>Vistara</option>
<option>Akasa Air</option>
</select>

<!-- Class Selection -->
<select name="class" required>
<option value="">Select Class</option>
<option>Economy</option>
<option>Business</option>
<option>First Class</option>
</select>

<!-- Seat Preference -->
<select name="seat" required>
<option value="">Seat Preference</option>
<option>Window</option>
<option>Aisle</option>
<option>Middle</option>
</select>

<!-- Travel Date -->
<input type="date" name="travel_date" required>

<button type="submit" name="submit">Confirm Booking</button>

</form>

</div>

</div>
</div>

</body>
</html>