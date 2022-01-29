<?php
    require ('db_con.php');

 if(isset($_SESSION["userID"]))
{
    $userid = $_SESSION["userID"];

    $con=mysqli_connect("username","password","bloggingsystem");

    

    $result = mysqli_query($con,"SELECT banned FROM user where user_status = ".$user_status);

    while($row = mysqli_fetch_array($result)){
        $banned= $row['banned'];
    }

    mysqli_close($con);

    if($banned == "1"){
        header("Location:index.php");
    }
    else{   
        header("Location:index.php");
    }
}

?>
