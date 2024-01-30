<script type="text/javascript">
	function confirm_me(){
	var answer= confirm("Do you want to delete?");
		if(answer){
			return true;
		}else{
			return false;
		}
	}
</script>
<table border="2" cellpadding="2" cellspacing="2" width="800" align="center">
	<tr>
		<th>destination id</th>
		<th>seat no</th>
		<th>Booking date</th>
		<th>Customer id</th>
	</tr>
	<?php 
     function select_booking($con){
     	$select="select * from tblbooking";
     	$compile=mysqli_query($con,$select);
     	return $compile;
     }
     	$compile=select_booking($con);
     	while($data = mysqli_fetch_array($compile)){
	 ?>
	<tr>
		<td><?php echo $data[1]?></td>
		<td><?php echo $data[2]?></td>
		<td><?php echo $data[3]?></td>
		<td><?php echo $data[4]?></td>
		<td><a onclick="return confirm_me()" href="index.php?page=delete&id=<?php echo $data[0];?>">Delete</a></td>
	</tr>
<?php 
}  
?>
</table>