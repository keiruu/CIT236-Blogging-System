<?php
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Create/Add Post</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>

<body>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="admin_Home.php" class="login_link" >Home</a>
                <a href="admin_Home.php" class="login_link" >Profile</a>
                <a href="admin_panel.php">
                    <button id="loginbtn">Admin Panel</button>
                </a>
            </div>
    </div>

  

      
       
              <?php
	require ('db_con.php');
	$userid = $_GET['userid'];
	$showUsersSql = $conn->prepare ("Select * from data where userid=':userid' ");
	$showUsersSql->execute();
	$user = $showUsersSql->fetchAll();
	
	var_dump ($user);die;
?>

<div>
<?php foreach ($showUsers as $usersList): ?>
                   <tr>
                      <td><p><?= $usersList['userId']; ?> </p></td>
                      <td><p><?= $usersList['user_status']; ?> </p></td>
                      <td class="update"><a href="update_form.php?id=<?= $usersList['userId'] ?>">Update</a></td>
                  
                    
                    </tr>
                  <?php endforeach; ?>



  </div>      

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>