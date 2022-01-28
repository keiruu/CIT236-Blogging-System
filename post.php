<?php
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Admin Panel</title>

    <link rel="stylesheet" href="styles/post.css">
    <script src="https://kit.fontawesome.com/d4ca20db22.js" crossorigin="anonymous"></script>

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
      <div class="text-container">
          <!-- Dear Backend, placeholder lang ini. Isli niyo lang except ang back button  -->
          <a href="javascript:history.back()"><- back</a><br><br>
          <p>January 1, 2022 by Zenrick Parcon</p>
          <h1>How to apply in Adonis Gay Bar<br><br></h1>
          <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fringilla volutpat orci vel ultrices. Vivamus pharetra leo at libero gravida, sit amet consectetur sem sagittis. Pellentesque ac porta dolor. Proin tortor est, posuere ut lectus sed, tincidunt fringilla nisi. Phasellus vitae vulputate leo. Sed dui tortor, iaculis sed consequat sed, aliquet at purus. Ut elementum risus quis nunc commodo porta. Pellentesque a euismod mi. Vestibulum vulputate in ipsum et facilisis. Fusce ac quam sit amet nunc gravida vulputate. Donec quis tempus tortor, sed vulputate nunc. Cras tristique volutpat rutrum. Aliquam erat volutpat. Phasellus quis ultricies velit.

Pellentesque ullamcorper, tellus dignissim interdum tempor, nisi sem malesuada sem, in tempus velit ipsum in dolor. Integer dictum neque enim, quis viverra tellus pharetra et. Suspendisse vel libero et diam volutpat ullamcorper sed ac libero. Sed semper et nisi nec mollis. Vivamus non tempor velit, nec scelerisque lorem. Ut in odio quis felis vehicula suscipit. Aliquam ut placerat mi. Mauris lectus nisl, auctor vitae eros id, vestibulum bibendum urna. Nunc consequat felis sit amet semper blandit.

Nunc rutrum id augue at varius. Proin ut nisi libero. Vestibulum justo risus, pulvinar sed rutrum scelerisque, ultrices eu nulla. Ut vitae velit malesuada, elementum mi eu, porttitor turpis. In pharetra tempor justo in dictum. Nullam eget eleifend magna. Vivamus eleifend dolor vel pretium lacinia. Etiam ullamcorper nisi ornare ex rhoncus rutrum.

Morbi faucibus ipsum sed massa malesuada, at lacinia quam consequat. Nullam scelerisque ultricies enim quis tempor. Proin lobortis pharetra enim at tristique. Vivamus molestie massa sit amet tellus interdum, non blandit magna congue. Pellentesque ante sem, rutrum sit amet interdum vel, fermentum quis arcu. Suspendisse posuere velit ut mattis cursus. Cras sit amet tellus suscipit, rhoncus purus sit amet, auctor est. Praesent porttitor, ipsum ac sollicitudin dictum, mauris nulla vestibulum est, at vulputate purus dolor ut ligula. Ut volutpat nulla augue, imperdiet tincidunt nisl malesuada id. Vestibulum maximus vestibulum velit, id lacinia lacus facilisis vulputate. Fusce imperdiet, erat non pulvinar rhoncus, tellus tortor posuere justo, facilisis tincidunt nunc lectus in nunc. Aliquam erat volutpat. Vivamus laoreet erat fermentum placerat vulputate. Curabitur elementum felis in dui lacinia sodales ac quis dui.</p>
      </div>
      <div class="comments_container">
            <!-- heart testing -->
                    <div class="heart_btn">
                        <Button onclick="Toggle1()" id="btnh1" class="h_btn"><i class="fas fa-heart"></i></Button>
                    </div>
                    <script>
                        var btnvar1 = document.getElementById('btnh1');

                            function Toggle1(){
                            if (btnvar1.style.color =="red") {
                                    btnvar1.style.color = "grey"
                                }
                                else{
                                    btnvar1.style.color = "red"
                                }
                            }
                    </script>
                
            <!-- heart testing -->
        <p>COMMENTS</p>
            <form action="#">
                <input type="text" id="cmnt1" name="cmnt1" placeholder="Any thoughts about this post?">
                    <div class="comment_btn">
                        <button type="submit" id="pcomment_btn">Post comment</button>
                        <button id="c_btn">Cancel</button>
                    </div>
            </form>
      </div>
    </div>
  
    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>