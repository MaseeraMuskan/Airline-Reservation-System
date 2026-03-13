<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
<h2>Airline Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
</form>

</div>

<?php
if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="1234"){
        $_SESSION['user']="admin";
        header("Location: home.php");
    }else{
        echo "<p style='color:red;'>Invalid Login</p>";
    }
}
?>

</body>
</html>