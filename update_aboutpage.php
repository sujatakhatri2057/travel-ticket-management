<?php 
extract($_POST);
function update_homepage($con,$title,$description)
{
$query="update tblcontent set Title='$title',Description='$description'where Page='About'";
$compile=mysqli_query($con,$query);
return $compile;
}
$update=update_homepage($con,$title,$description);
if($update){
	header("Location:index.php?page=change_aboutpage");
}
 ?>