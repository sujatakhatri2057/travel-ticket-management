<?php 
function select_banner($con)
{
	$select ="select banner_name from banner where Id=1";
	$compile=mysqli_query($con,$select);
	$fetch=mysqli_fetch_row($compile);
	return $fetch;
}
$image=select_banner($con);
?>

<img src="banner/<?php echo $image[0] ?>" width="700" height="150 "align="centre">