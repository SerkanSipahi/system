<?php 

$localhost = "127.0.0.1"; 
$username = "root"; 
$password = "quintero0123A"; 

//bd_system_online
$dbname = "bd_system_online"; 
 

// create connection 
$connect = new mysqli($localhost, $username, $password, $dbname); 
 
// check connection 
if($connect->connect_error) {
    die("conexion fallida : " . $connect->connect_error);
} else {
    echo "<script>alert('se conecto');</script>";
}
 
?>




