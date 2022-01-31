<?php

	function setComments($conn) {
	if (isset($_POST['commentSubmit'])) {
		$commentID= $_POST['commentID'];
		$userID= $_POST['userID'];
		$date = $_POST['date'];
		$comment= $_POST['comment'];

		$sql="INSERT INTO comment(userID, date, comment, commentID)VALUES ('$userID','$date', '$comment','$commentID',)";
		$result = $conn->query($sql);

	}
}

function getComments($conn){

	$sql = "SELECT * FROM 'comment'";
	$result = $conn->query($sql);
	while ($row = $result) {

		echo"<div class='comment-box'><p>";
		echo $row['uid']."<br>";
		echo $row['date']."<br>";
		echo nl2br ($row['message']."");
		echo"</p></div>";
	}
	
}
?>