<?php  
if(!isset($_SESSION['login'])){ 
	header("Location:index.php?page=admin_panel");
 }
 ?>
<table align="center" border="1" cellspacing="2" cellpadding="2" width="100%" >
	<tr>
		<td><a href="index.php?page=change_banner"> Change banner</a></td>
		<td><a href="index.php?page=change_homepage"><img src="images.jpg" width="30px" height="auto"><br> Change home page</a></td>
		<td><a href="index.php?page=change_aboutpage"><img src="download.png" width="30px" height="auto"><br> Change about page</a></td>
		<td><a href="#"><img src="footer.png" width="30px" height="auto"><br>Change footer page</a></td>
		<td><a href="index.php?page=change_password"><img src="password.png" width="30px" height="auto"><br>Change password</a></td>
		<td><a href="index.php?page=cancel_booking"><img src="password.png" width="30px" height="auto"><br>Cancel Booking</a></td>
		<td><a href="index.php?page=logout"><img src="logout.png" width="30px" height="auto"><br>logout</a></td>
	</tr>
</table>