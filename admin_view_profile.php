<?php
     SESSION_START();
    require ("db_con.php");
    $user = isset($_GET['id']) ? $_GET['id'] : '';

    $usersql = $conn->prepare ("Select * from user where userID='$user'");
    $usersql->execute();
    $user = $usersql->fetch();

    ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Admin View Profile</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>

<body>
    <?php 
    echo $_SESSION['user'];?>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="admin_home.php">Home</a>
                <a href="admin_profile.php">Profile</a>
                <a href="admin_panel.php">
                    <button id="loginbtn">Admin Panel</button>
                </a>
            </div>
    </div>


   <div class="body-container">
    <form name="update" action="update_save.php" method="POST">
        <div class="profile-container">
            <h1>View Profile</h1>
            <div class="container">
                <form name="update" action="update_save.php" method="POST" class="inputs">
                    <input type = "hidden" id = "userId" name = "userId" value="" required/>
                    <p>Username:</p>
                    <input type = "text" id = "username" name = "username" placeholder="Enter Username" value="" required/>
                    <p>Email:</p>
                    <input type="email" id="email" name="email" placeholder="Enter Email" value="<?=  $user['username']; ?>" required />
                    <p>Password:</p>
                    <input type = "password" id="password" name = "password" placeholder="Enter password" value="<?=$user['password'];  ?>" required/> 
                    
                    <div class="btns">
                        <a href="admin_panel.php" class="btn-light">Back</a>
                        <input class="btn" type="submit" value="Update" id="submit" name="update" />
                    </div>
                </form>
            </div>
        </div>
   </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>