<?php
$select_sql ="select * from tblcontent where  Page ='Home'";

$query = mysqli_query($con,$select_sql);
$data = mysqli_fetch_row($query);
//print_r($data);
?>
<h1><?php echo $data [1]; ?></h1>
<p> <?php echo $data [2]; ?></p><?php
