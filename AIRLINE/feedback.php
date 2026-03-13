<?php
$message = "";

if(isset($_POST['submit'])){
    
    $name = $_POST['name'] ?? "";
    $email = $_POST['email'] ?? "";
    $rating = $_POST['rating'] ?? "";
    $comment = $_POST['comment'] ?? "";

    if($name != "" && $email != "" && $rating != "" && $comment != ""){
        $message = "⭐ Thank you for your feedback!";
    } else {
        $message = "Please fill all fields!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Flight Booking Feedback</title>

<style>
body{
    margin:0;
    font-family:Arial;

    /* Attractive Flight Background */
    background: url('https://images.unsplash.com/photo-1540339832862-474599807836') no-repeat center center fixed;
    background-size:cover;

    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

/* Dark Overlay */
.overlay{
    background:rgba(0,0,0,0.65);
    width:100%;
    height:100%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box{
    background:white;
    padding:30px;
    width:380px;
    border-radius:15px;
    text-align:center;
    animation:fadeIn 1.5s ease-in-out;
    box-shadow:0 10px 25px rgba(0,0,0,0.5);
}

input, textarea, select{
    width:92%;
    padding:10px;
    margin:8px 0;
    border-radius:6px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:12px;
    background:linear-gradient(to right,#0072ff,#00c6ff);
    color:white;
    border:none;
    border-radius:6px;
    cursor:pointer;
    font-size:15px;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
}

.message{
    margin-bottom:10px;
    font-weight:bold;
    color:green;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

h2{
    margin-bottom:15px;
}
</style>

</head>

<body>

<div class="overlay">

<div class="box">

<h2>✈ Flight Booking Feedback</h2>

<?php if($message != "") { ?>
    <div class="message"><?php echo $message; ?></div>
<?php } ?>

<form method="POST">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Your Email" required>

<select name="rating" required>
    <option value="">Rate Our Service</option>
    <option>⭐</option>
    <option>⭐⭐</option>
    <option>⭐⭐⭐</option>
    <option>⭐⭐⭐⭐</option>
    <option>⭐⭐⭐⭐⭐</option>
</select>

<textarea name="comment" placeholder="Write your feedback..." required></textarea>

<button type="submit" name="submit">Submit Feedback</button>

</form>

</div>

</div>

</body>
</html>