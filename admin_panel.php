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
    <div class="body-container">
        <h1>Admin Panel</h1>
        <div class="container">
            <table class="panel">
              <tr>
                <th>Users</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
              
              <tr>
                <td>abbyunat@gmail.com</td>
                <td class="active"><p>Active</p></td>
                <td>
                  <div>
                    <button class="btn-posts"><a href="#">View Posts</a></button>
                    <button class="btn-profile"><a href="#">View Profile</a></button>
                  </div>
                </td>
              </tr>
              <!-- <div>
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
</body>