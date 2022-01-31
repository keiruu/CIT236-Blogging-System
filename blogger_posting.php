<?php
require("db_con.php");
    $id=$_GET['id'];
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
                <a href="blogger_home.php?id=<?php echo $id; ?>">Home</a>
                <a href="blogger_profile.php?id=<?php echo $id; ?>">Profile</a>
                <a href="blogger_posting.php?id=<?php echo $id;?>">
                    <button id="postbtn">Post</button>
                </a>
            </div>
    </div>

    <div class="body-container">
      <div class="text-container">
        <form action="insertblog.php?id=<?php echo $id;?>" method=”POST” class="inputs">
          <a href="javascript:history.back()"><- back</a><br><br>
          <input type = "hidden" id = "userId" name = "userID" value="<?php echo $id?>" required/>
            <input type="text" id="title" name="title" placeholder="Enter the title of your blog post">
            <textarea type ="text" name="post" rows="40" cols="98" id="post" placeholder="Write your thoughts here..."></textarea>
            <div class="btn-blog-container">
              <button id="btn-post" type="submit" name="blog-post">Post Blog</button>

            </div>
          </form>
        </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>