<?php

	require("db_con.php");
		
	if(isset($_POST['submit'])) {
		$post=$_POST['post'];
		$userid=$_GET['id'];

			include("db_con.php");

$query="INSERT INTO post (userID, post,) VALUES ('$id' , '$post') ";
	mysqli_query($conn , $query);
	$savePost = $conn->prepare($sqlstr);
	$savePost->bindparam('$post', $_POST['post']);
	$savePost->bindparam('$id', $_POST['id']);
	$savePost->execute();
		$id =$_GET['id'];
		$usersql = $conn->prepare ("Select * from user where userID = '$id'");
		$usersql->execute();
		$user = $usersql->fetch();
	

	}
else{
	header("Location:blogger_posting.php?id=".$user['userID']);
	}


?>
