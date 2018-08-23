<?php
require 'con.php';
$b_id=$_GET['book_id'];    //grabbing booking id from get method
$query = mysqli_query($con,"select flight_id,booking_id,status from bookings where booking_id ='$b_id'"); 
$fetch = mysqli_fetch_assoc($query);
$json = json_encode($fetch);    //converting the details in to json
print_r($json);
?>
