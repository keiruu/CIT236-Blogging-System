<?php
require ("db_con.php");

if(!$conn){
   echo" <h3> not connected </h3>";
   }


if(isset($_REQUEST["new_post"])){
$title = $_REQUEST["title"];
$content = $_REQUEST["content"];	


$sql = "INSERT INTO data(title, content) VALUES ('$title', '$content')";
mysqli_query($conn, $sql);

}

?>