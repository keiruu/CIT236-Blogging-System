<?php
$date = date('Y-m-d');

require ("db_con.php");
$sqlstr = "INSERT INTO post (title, post, date, userID, commentID) VALUES
(:title, :post, $date, :userID, '2')";
$saveUser = $conn->prepare($sqlstr);
$saveUser->bindparam(':title', $_POST['title']);
$saveUser->bindparam(':post', $_POST['post']);
$saveUser->bindparam(':userID', $_GET['userID']);
$saveUser->execute();

echo 
			header('Location: blogger_home.php?id='.$userID);
?>

