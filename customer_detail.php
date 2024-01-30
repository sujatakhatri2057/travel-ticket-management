<?php 
extract($_POST);
$insert_sql="insert into booked_customer(customer_name,customer_email,customer_contact,customer_address)
             values ('$cname','$email','$contact','$address')";
//the inserted detail of cudtomer is now retrieved fot the latest customer_id
//in order to save the customer_id of current customer to the booking table
mysqli_query($con,$insert_sql);
$select_id="select max(id) from booked_customer";
$row=mysqli_query($con,$select_id);
$fetch=mysqli_fetch_row($row);

foreach($seat as $seat_number){
	//saving the booking detail of the customer in the booking table.
$insert_sql2="insert into tblbooking(customer_id,Id,seat_number,recent_date)
             values ('$fetch[0]','$Id','$seat_number','$recent_date')";
mysqli_query($con,$insert_sql2);
}
header("Location:index.php?page=booking");
 ?>