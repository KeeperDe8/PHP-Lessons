<?php
$connection = mysqli_connect("localhost","root","","myDB");

if(mysqli_connect_error()){
    echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
?>