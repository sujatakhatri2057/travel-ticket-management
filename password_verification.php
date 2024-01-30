<?php 
extract($_POST);
function check($con,$old,$new)
{
	$update = "update tbladmin set user_password = md5('$new') where user_password = md5('$old') and id=1";
	$compile = mysqli_query($con, $update);
	return $compile;
}
if($new==$confirm_new)
{
	$result=check($con,$old,$new);
	if($result)
{
	header("Location:index.php?page=change_password&message=success");
}
}
else
{
	header("Location:index.php?page=change_password&message=error");	
}
 ?>
	

