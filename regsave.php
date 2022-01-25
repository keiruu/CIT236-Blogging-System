<?php
require ("db_con.php");
$sqlstr = "INSERT INTO user ( username, password,email, user_fname, user_lname, user_contact, user_type,user_status,role) VALUES
(:username, :password, :email,user_fname, user_lname,user_contact, user_type,user_status, 'user')";
$saveUser = $conn->prepare($sqlstr);
$saveUser->bindparam(':username', $_POST['username']);
$saveUser->bindparam(':password', $_POST['password']);
$saveUser->bindparam(':email', $_POST['email']);

$saveUser->execute();

echo "
<script>
alert ('New User Added');
window.opener.location.replace('index.php');
</script>
";
?>