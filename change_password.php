<?php 
if(isset($_GET['message'])){
	if($_GET['message'] == "error")
	{
 ?>
<div style="color:red;">
	<p>Your new password and confirm password does not match</p>
</div>
<?php
 }
 else if($_GET['message'] == "success"){
 	?>
 	<div style="color:green;">
	<p>Password changed successfully</p>
</div>
<?php
 }
}
?>
<form method="POST" action="index.php?page=password_verification">
	<label>Old password:</label>
	<input type="text" name="old"><br><br>
	<label>New password:</label>
	<input type="text" name="new"><br><br>
	<label>Confirm password:</label>
	<input type="text" name="confirm_new"><br><br>
	<input type="submit" value="Change password">
</form>