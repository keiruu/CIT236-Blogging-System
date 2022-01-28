<?php
    require ("db_con.php");

if(!empty($_GET['statusID'])&&isset($_GET['statusID']))
		{
			$status_id = $_GET['status_id'];
			$status = $_GET['status'];
			$query = "update menus set status = '$status' where id = '$statusID'";
			mysql_query($query);
			header("location:menus.php");
		}
	?>