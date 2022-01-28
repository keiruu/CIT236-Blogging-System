<?php
    require ("db_con.php");
    ?>
<html>
<head>
	
	  
</head>


<table border="0">
				<thead>
					<tr> 
						<th><p> User ID </p></th>
						<th><p> User Name </p></th>
						<th><p> Password </p></th>
						<th><p> Email </p></th>
						<th><p> Actions </p></th>
					</tr>
				</thead>
				<?php foreach ($showUsers as $usersList): ?>
				<tbody>
					<tr>
						<td><p><?= $usersList['userid']; ?> </p></td>
						<td><p><?= $usersList['username']; ?> </p></td>
						<td><p><?= $usersList['password']; ?> </p></td>
						<td><p><?= $usersList['email']; ?> </p></td>
						<td><a href="update_form.php?id=<?= $usersList['userID'] ?>">Update</a></td>
					
						
					</tr>
				</tbody>
			 <?php endforeach; ?>
			 <br /><br />
			 <a href = "index.php">LogOut</a>
</table>
</html>
