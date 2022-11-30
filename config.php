<?php 

$conn = mysqli_connect("localhost","root","","live_search");

if(!$conn){
    echo "Connection Failed" . mysqli_connect_error();
}
?>
