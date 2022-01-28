<?php
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
                <a href="admin_Home.php">Home</a>
                <a href="admin_view_profile.php">Profile</a>
                <a href="admin_panel.php">
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
                  <th>Users Status</th>
                  <th>Actions</th>
                  <th>Add Your Post</th>
				   
				  
                </tr>
                
				
				 
                <!-- Dear Backend, placeholder lang liwat ini, ang naka comment nga div ang daw example.
                  Insert niyo lang ang dapat nga values from db kag isulod tanan sa foreach loop
                -->
                <tr>
                  <td> <button class="btn-posts"><a href="admin_view_posts.php">See Users</a></button></td>
                  <td> <button class="btn-profile"><a href="admin_view_profile.php">View their Status</a></button> </td>
 
				  <td>
                    <div>
                      <button class="btn-posts"><a href="admin_view_posts.php">View your Posts</a></button>
                      <button class="btn-profile"><a href="admin_view_profile.php">View your Profile</a></button>
					  <td> <button class="btn-profile"><a href="addpost.php">Add Post </a></button> </td>
                    </div>
					
                  </td>
                </tr>
				
				

                <!-- <div>s
                  <?php foreach ($showUsers as $usersList): ?>
                    <tr>
                      <td><p><?= $usersList['userId']; ?> </p></td>
                      <td><p><?= $usersList['username']; ?> </p></td>
                      <td><p><?= $usersList['password']; ?> </p></td>
                      <td><p><?= $usersList['email']; ?> </p></td>
                        if statement for the status, kung ano ang status ya then display a specific td tag
                      <td class="update"><a href="update_form.php?id=<?= $usersList['userId'] ?>">Update</a></td>
                      <td class="delete"><a href="delete.php?id=<?= $usersList['userId'] ?>">Delete</a></td>
                      <td class="set"><a href="set.php?id=<?= $usersList['userId'] ?>">Set as Admin</a></td>
                    </tr>
                  <?php endforeach; ?>
                </div> -->

              </table>
          </div>
      </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>