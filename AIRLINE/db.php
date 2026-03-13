<?php
$conn = mysqli_connect("localhost", "root", "", "dbms2");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>