<?php
function select_aboutpage($con){
	$select="select* from tblcontent where Page='About'";
	$compile=mysqli_query($con,$select);
	$data=mysqli_fetch_row($compile);
	return $data;
}
$fetch=select_aboutpage($con);
 ?>
<form action="index.php?page=update_aboutpage" method="POST">
	<label>Title:</label><br>
	<input type="text" name="title" value="<?php echo $fetch[1];?>"><br><br>
	<label>Description:</label><br>
	<textarea rows="20" cols="150" name="description"><?php echo $fetch[2] ;?></textarea><br><br>
	<input type="submit" name="submit" value="SAVE">
</form>