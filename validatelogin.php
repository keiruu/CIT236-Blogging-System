<?php
	require ('db_con.php');
	
	
	$email = $_POST['email'];
	$password = $_POST['password'];

	$usersql = $conn->prepare ("Select * from user where email = '$email' AND password = '$password'");

	$usersql->execute();
	$user = $usersql->fetch();
	if ($user) {
		if ($user['role'] == 'admin') {
		
			header('Location: admin_panel.php');
		}
		else if ($user['role'] == 'user') {
			
			header('Location: blogger_home.php?id='.$user['userid']);		
		} else {
			"<script>
				alert ('No Records Found');
				window.location.href = 'login.php';
			</script> ";
		}
	}
	else {
		echo"
			<script>
				alert ('welcome');
			</script>";
		}
	echo "
		<script>
			window.location.href = 'blogger_home.php';
		</script>
		";
?>