<form action="index.php?page=booking&msg=show" method="POST">
	<label>Destination:</label>
	<?php
	$select_sql="select* from destination";
	$compile=mysqli_query($con,$select_sql);
	
	?>
	<select name="destination_name">
		<?php while($data = mysqli_fetch_array($compile)){ ?>
		<option value="<?php echo $data['Id'];?>"><?php echo $data['destination_name'];?></option>
	<?php } ?>
	</select> 
	<input type="submit"  value="GO">
	<br><br>
</form>
<?php 
if(isset($_GET['msg'])) {
	if($_GET['msg']=="show"){
		extract($_POST);
		$select="select* from tblbooking where Id=$destination_name";
		$compile1=mysqli_query($con,$select);
		while($data1=mysqli_fetch_array($compile1)){
			$data_array[]=$data1[2];
		}
		//print_r($data_array);
		if(in_array('A1',$data_array))
		{
			$A1="background-color:red";
		}
		if(in_array('A2',$data_array))
		{
			$A2="background-color:red";
		}
		if(in_array('A3',$data_array))
		{
			$A3="background-color:red";
		}
		if(in_array('A4',$data_array))
		{
			$A4="background-color:red";
		}
		if(in_array('B1',$data_array))
		{
			$B1="background-color:red";
		}
		if(in_array('B2',$data_array))
		{
			$B2="background-color:red";
		}
		if(in_array('B3',$data_array))
		{
			$B3="background-color:red";
		}
		if(in_array('B4',$data_array))
		{
			$B4="background-color:red";
		}
		?>

<!--Design for Seat Navigation shown only 
    when the Go button is pressed -->
<table border="1" cellpadding="2" cellspacing="2" width="300" 
        align="centre"> 
        <tr>
        	<td style="<?php echo $A1;?>">A1</td>
        	<td style="<?php echo $A2;?>">A2</td>
        	<td style="<?php echo $B1;?>">B1</td>
        	<td style="<?php echo $B2;?>">B2</td>
        </tr>
        <tr>
        	<td style="<?php echo $A3;?>">A3</td>
        	<td style="<?php echo $A4;?>">A4</td>
        	<td style="<?php echo $B3;?>">B3</td>
        	<td style="<?php echo $B4;?>">B4</td>
        </tr>
</table>
<form method="POST" action="index.php?page=customer_detail">
	<input type="hidden" name="Id" value="<?php echo $destination_name ?>"><br>
	<label>Name:</label>
	<input type="text" name="cname" placeholder="Enter your name"><br><br>
    <label>Email:</label>
	<input type="text" name="email" placeholder="Enter your email"><br><br>
	<label>Contact:</label>
	<input type="text" name="contact" placeholder="Enter your contact"><br><br>
	<label>Address:</label>
	<input type="text" name="address" placeholder="Enter your address"><br><br>
	<label>Date:</label>
	<input type="date" name="recent_date"><br><br>
	<label> seat number:</label><br>
	<input type="checkbox" name="seat[]" value="A1">A1
	<input type="checkbox" name="seat[]" value="A2">A2
	<input type="checkbox" name="seat[]" value="A3">A3
	<input type="checkbox" name="seat[]" value="A4">A4<br>
	<input type="checkbox" name="seat[]" value="B1">B1
	<input type="checkbox" name="seat[]" value="B2">B2
	<input type="checkbox" name="seat[]" value="B3">B3
	<input type="checkbox" name="seat[]" value="B4">B4<br><br>
    <input type="submit" value="Book Now">
</form>
<?php }
} ?>
