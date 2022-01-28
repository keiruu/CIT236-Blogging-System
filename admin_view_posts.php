<?php
    require ('db_con.php');
    $showUsersSql = $conn->prepare ("Select * from post");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetchAll();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Admin View Posts</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>

<body>
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
    <div class="bod2">
        
    <?php foreach ($showUsers as $usersList): ?>
      <div class="img_container3">
          <img src="images\laptop.png" id="laptop">
      </div>

      <div class="info">

        <div class="text">
                    <tr>
                      <td><p><?= $usersList['date']; ?> </p></td>
                      <td><p><?= $usersList['title']; ?> </p></td>
                      <td><p><?= $usersList['post']; ?> </p></td>
                    </tr>
                    
            <button type="submit" id="rdmebtn" style="vertical-align:middle"><span><a href="post.php">Read More</a></span></button>
                 
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>