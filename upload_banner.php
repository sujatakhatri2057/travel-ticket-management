<?php 
extract($_POST);
$name=$_FILES['banner']['name'];//name gives the name of the banner
$path=$_FILES['banner']['tmp_name'];//tmp_name give us the path of the banner
$directory='banner/';//uploading the address of the banner
move_uploaded_file($path,$directory.$name);
function upload_banner($con,$name)
{
	$update="update banner set banner_name='$name' where Id=1";
	$compile=mysqli_query($con,$update);
	return $compile;
}
$update=upload_banner($con,$name);
if($update)
{
header("Location:index.php?page=admin_control");
}
?>