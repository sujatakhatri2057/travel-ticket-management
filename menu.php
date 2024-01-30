<a href="index.php">Home</a>&nbsp;
<a href="index.php?page=about">About</a>&nbsp;
<?php  
if(!isset($_SESSION['login'])){ ?>
	<a href="index.php?page=admin_panel">Admin panel</a>&nbsp;
<?php }?>
<a href="index.php?page=contact">Contact</a>&nbsp;
<a href="index.php?page=booking">Booking</a>&nbsp;
<?php  
if(isset($_SESSION['login'])){ ?>
	<a href="index.php?page=admin_control">Dashboard</a>
<?php }?>