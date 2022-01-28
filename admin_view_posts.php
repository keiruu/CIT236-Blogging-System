<?php
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
                <a href="index.php">Home</a>
                <a href="index.php">Profile</a>
                <a href="admin_panel.php">
                    <button id="loginbtn">Admin Panel</button>
                </a>
            </div>
    </div>

  <div class="body-container">
    <div class="bod2">
      <div class="img_container3">
          <img src="images\laptop.png" id="laptop">
      </div>

      <div class="info">
        <!-- Dear Backend, placeholder lang ni ang sa text, exchange it for the values nga ara sa database
            delete this comment kung ma islan niyo na.
         -->
        <div class="text">
            <p>January 1, 2022 by Zenrick Parcon</p>
            <h1>How to apply in <br> Adonis Gay Bar</br></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam<br>
            pulvinar odio id finibus scelerisque. Nulla sit amet suscipit metus.<br>
            Nullam viverra nibh eget ex pulvinar,vel pharetra augue malesuada.</p>
        </div>
        <button type="submit" id="rdmebtn" style="vertical-align:middle"><span>Read More</span></button>
      </div>
    </div>
  </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>