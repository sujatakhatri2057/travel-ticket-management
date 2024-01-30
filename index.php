<?php
session_start();
//echo $_SESSION['login'];
include('connection/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Travel</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="2" width="700" align="center" style="background-color:lavenderblush;">
	<tr>
		<td> <?php include ('header.php')?></td>
	</tr>
	<tr>
		<td><?php include('menu.php')?>
		
		 <?php
		if (isset($_GET['page']))
		{
			$page=$_GET['page'];
			include("$page.php");	
		}
		else
		{
			include('home.php');
		}
		?>
	   </td>
   </tr>
	<tr>
		<td><?php include('footer.php')?></td>
	</tr>
</table>
</body>
</html>