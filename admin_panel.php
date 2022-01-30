<?php
    
    require ("db_con.php");
    $adminid =$_GET['adminid'];
    $userid =$_GET['uid'];
    $showUsersSql = $conn->prepare ("Select * from user where role='user'");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetchAll(); 
    ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Admin Panel</title>
    <link rel="stylesheet" href="styles/admin.css">
</head>

<body>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="admin_home.php?uid=0&adminid=<?php echo $adminid?>">Home</a>
                
                <a href="admin_profile.php?uid=0&adminid=<?php echo $adminid?>">Profile</a>
                <a href="admin_panel.php?uid=0&adminid=<?php echo $adminid?>">
                    <button id="loginbtn">Admin Panel</button>
                </a>
            </div>
    </div>

    <div class="body-container">
      <div class="admin-container">
        <h1>Admin Panel</h1>
        <div class="container">
              <table class="panel">
                <tr>
                  <th>Users</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
                
                <!-- Dear Backend, placeholder lang liwat ini, ang naka comment nga div ang daw example.
                  Insert niyo lang ang dapat nga values from db kag isulod tanan sa foreach loop
                -->
                <?php foreach ($showUsers as $usersList): ?>

                <tr>
                  <td><p><?= $usersList['email']; ?> </p></td>
                  <td><p><?= $usersList['username']; ?> </p></td>
                  <td class="inactive"><p><?= $usersList['user_status']; ?></p></td>
                  <?php $id =$usersList['userID'];?>
                    
                  <td>
                    <div>
                      <button class="btn-posts"><a href="admin_view_posts.php">View Posts</a></button>
                      <button class="btn-profile" type="submit"><a href="admin_view_profile.php?uid=<?php echo $id ?>&adminid=<?php echo $adminid?>">View Profile</a></button>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              
              <!--way lang ni>
                  <?php foreach ($showUsers as $usersList): ?>
                    <tr>
                  
                      <td><p><?= $usersList['email']; ?> </p></td>
                
                      <td class="update"><a href="update_form.php?id=<?= $usersList['userID'] ?>">Update</a></td>
                      <td class="delete"><a href="delete.php?id=<?= $usersList['userID'] ?>">Delete</a></td>
                      <td class="set"><a href="set.php?id=<?= $usersList['userID'] ?>">Set as Admin</a></td>
                    </tr>
                  <?php endforeach; ?>
              -->

              </table>
          </div>
      </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>