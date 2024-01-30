<?php 
extract($_GET);
$delete="delete from tblbooking where booking_id='$id'";
$compile=mysqli_query($con,$delete);
header("Location:index.php?page=cancel_booking");
 ?>