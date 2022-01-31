<?php
    require ("db_con.php");
    $id= $_GET['id'];
    $usersql = $conn->prepare ("Select * from user where userID='$id'");
    $usersql->execute();
    $user = $usersql->fetch();
    
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Profile</title>
    <link rel="stylesheet" href="styles/blogger.css">
</head>

<body>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">

                <a href="blogger_home.php?id=<?php echo $id?>">Home</a>
                <a href="blogger_profile.php?id=<?php echo $id; ?>">Profile</a>
                <a href="blogger_posting.php?id=<?php echo $id?>">
                    <button id="postbtn">Post</button>
                </a>
            </div>
    </div>

   <div class="body-container">
        <div class="profile-container">
            <h1>Your Profile</h1>
            <div class="container">
                <form name="update" action="update_saveuser.php" method="POST" class="inputs">
                    <input type = "hidden" id = "userId" name = "userId" value="<?= $id?>" required/>
                    <p>Username:</p>
                    <input type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?=$user['username']; ?>" required/>
                    <p>Email:</p>
                    <input type="email" id="email" name="email" placeholder="Enter Email" value="<?=$user['email']; ?>" required />
                    <p>Password:</p>
                    <input type = "password" id="password" name = "password" placeholder="Enter password" value="<?=$user['password']; ?>" required/> 
                    
                    <div class="btns">
                        <div>
                            <a href="javascript:history.back()" class="btn-light">Back</a>
                            <form name="update" action= "update_saveuser.php" method = "POST" >
                            <input class="btn" type="submit" value="Update" id="submit" name="update" />
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
   </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>