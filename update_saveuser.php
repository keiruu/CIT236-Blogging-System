'<?php
    require ("db_con.php");

    $sqlstr = 'UPDATE user SET username = :username, password = :password, email = :email WHERE userID = :userID';

    $updateUser = $conn->prepare($sqlstr);
    
    $updateUser->bindparam(':userID', $_POST['userID']);
    $updateUser->bindparam(':username', $_POST['username']);
    $updateUser->bindparam(':password', $_POST['password']);
    $updateUser->bindparam(':email', $_POST['email']);
    $usersql = $conn->prepare ("Select * from user where userID = '$userID'");
    $updateUser->execute();

    $user = $usersql->fetch();
	echo "
    	<script>
    		alert ('Sucessfullly Updated');
    	</script>
		";
        header("Location:blogger_profile.php?id=".$userID['userID']);


 ?>