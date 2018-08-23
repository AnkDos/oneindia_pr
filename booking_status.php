<?php
require 'con.php';
$b_id=$_GET['book_id'];
$query = mysqli_query($con,"select flight_id,booking_id,status from bookings where booking_id ='$b_id'");
$fetch = mysqli_fetch_assoc($query);
$json = json_encode($fetch);
print_r($json);
?>