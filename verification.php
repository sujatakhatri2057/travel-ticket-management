<?php
$_SESSION['login']=1;
extract($_POST);
$select_users="select * from tbladmin where username='$username' and user_password=md5('$user_password')";
$compile= mysqli_query($con,$select_users);
$data= mysqli_fetch_row($compile);
if($data[1]!=""){
	header("Location:index.php?page=admin_control");
}
else{
	header("Location:index.php?page=admin_panel");
}

 ?>
