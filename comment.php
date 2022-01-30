<?php

function setComments($conn){
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
	$sql="SELECT * from comment";
	$result= $conn->query($sql); 
	while ($row= $result->fetch_assoc()){
		echo "<div class='commentbox'><p>";
		echo $row['userid']. "<br><br>";
		echo $row['date '].  "<br><br>";
		echo $row['message']."";
		echo "<p></div>";
	}
	
}
?>