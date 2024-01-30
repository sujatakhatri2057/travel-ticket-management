<?php
extract($_POST);
$insert_sql="insert into customer_message(customer_name,customer_email,address,subject,message)
             values ('$customername','$email','$address','$subject','$message')";


mysqli_query($con,$insert_sql);
header("Location:index.php?page=contact&msg=success");
?>