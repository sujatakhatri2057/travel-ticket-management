<?php
if(isset($_GET['msg'])){
 if($_GET['msg']=="success"){
?>
<p style="color:red">Your message is sent successful</p>
<?php }
}?>

<form action ="index.php?page=send_message" method="POST">
	<label>Your Name (required)</label><br>
	<input type="text" name="customername" placeholder="Enter your name"><br><br>
	<label> Your Email (required)</label><br>
	<input type="email" name="email" placeholder="Enter your email"><br><br>
	<label>Your Address (required)</label><br>
	<input type="text" name="address" placeholder="Enter your address"><br><br>
	<label>subject</label><br>
	<input type="text" name="subject" placeholder="Subject of your message"><br><br>
	<textarea rows="5" cols="100" name ="message"></textarea><br><br>
	<input type="submit" name="send" value="Send my message">
</form>
