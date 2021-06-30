<!-- This is database connection change this setings to yours -->

<?php

$con = new mysqli('localhost','root','sahan','php_crud');

if(!$con){
    die(mysqli_error($con));
}


?>

