<?php
$userid =  $_GET['userID'];
$active =  $_GET['active'];
$inactive =  $_GET['inactive'];
include "db_con.php";


if($active == 1)
{
mysqli_query($dataBase,"UPDATE `users` SET `status` = '1' where userID='$userid'");
}
else
{
 mysqli_query($dataBase,"UPDATE `users` SET `status` = '0' where userID='$userid'");
}

 ?> 