<?php
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Make a post</title>
    <link rel="stylesheet" href="styles/blogger.css">
</head>

<body>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="index.php">Home</a>
                <a href="index.php">Profile</a>
                <a href="blogger_posting.php">
                    <button id="loginbtn">Post</button>
                </a>
            </div>
    </div>

    <div class="body-container">
      <div class="text-container">
          <!-- Dear Backend, placeholder lang ini. Isli niyo lang except ang back button  -->
          <a href="javascript:history.back()"><- back</a><br><br>
          <form action="#" id="post">
            <input type="text" id="title" name="title" placeholder="Enter the title of your blog post">
            <textarea name="blog" form="post" rows="40" cols="119" id="blog" placeholder="Write your thoughts here..."></textarea>
            <div class="btn-blog-container">
              <button type="submit" id="btn-post">Post Blog</button>
            </div>
          </form>
        </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>