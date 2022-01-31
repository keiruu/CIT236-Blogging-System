<?php
    require ("db_con.php");

    $sqlstr = 'UPDATE user SET username = :username, password = :password, email = :email WHERE userID = :userID';

    $updateUser = $conn->prepare($sqlstr);
    
    $updateUser->bindparam(':userID', $_POST['userID']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':email', $_POST['email']);
    $updateUser->execute();


	echo "
    	<script>
    		alert ('Sucessfullly Updated');
    	</script>";header ("Location: admin_panel.php"); 

 ?>