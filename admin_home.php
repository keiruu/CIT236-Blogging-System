<?php 
$adminid = $_GET['adminid'];
$userid = $_GET['uid'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Software Technology Final Exam</title>

    <link rel="stylesheet" href="styles/style.css">
    <script src="https://kit.fontawesome.com/d4ca20db22.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="header">
        <img src="images\Logo.png" width="150px" height="30px">

            <div class="header-right">
                <a href="admin_home.php?uid=0&adminid=<?php echo $adminid?>">Home</a>
                <a href="admin_profile.php?uid=0&adminid=<?php echo $adminid?>">Profile</a>
                <a href="admin_panel.php?uid=0&adminid=<?php echo $adminid?>">
                    <button id="loginbtn">Admin Panel</button>
                </a>
            </div>
    </div>


    <div class="wrapper">
<form>
        <div class="img_container">
                <img src="images\bluehand.png" id="bhand">
        </div>
        <div class="img_container2">
                <img src="images\redhand.png" id="rhand">
        </div>

        <div class="bod1">
            <H1> Welcome back</br>Admin! </H1>
            <a href="admin_panel.php" id="btn" style="vertical-align:middle"><span>Admin Panel</span></a>
        </div>

        <div class="bod2">
            <div class="img_container3">
                <img src="images\laptop.png" id="laptop">
            </div>
            <div class="info">
                <!-- Dear Backend, placeholder lang ni ang sa text, exchange it for the values nga ara sa database
                    delete this comment kung ma islan niyo na    
                -->
                <div class="text">
                    <p>January 1, 2022 by Zenrick Parcon</p>
                    <h1>How to apply in <br> Adonis Gay Bar</br></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam<br>
                    pulvinar odio id finibus scelerisque. Nulla sit amet suscipit metus.<br>
                    Nullam viverra nibh eget ex pulvinar,vel pharetra augue malesuada.</p>
                </div>
                <button type="submit" id="rdmebtn" style="vertical-align:middle"><span><a href="admin_post.php">Read More</a></span></button>
            </div>
        </div>
        <div class="bod3">
            <div class="table_container">
                <table id="tb1">
                        <tr> 
                            <td>
                                <div class="heart_btn"><Button onclick="Toggle1()" id="btnh1" class="h_btn3"><i class="fas fa-heart"></i></Button>
                                    <span class= "click-text"</span>
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
                                        var clicks = 0;

                                    document.getElementById("clicks").innerHTML = clicks;

                                    $('.like-counter').click(function() {
                                    clicks += 1;
                                    document.getElementById("clicks").innerHTML = clicks;
                                     $('.fas fa-heart').addClass("liked");
                                        });
                                </script>
                            </td>
                        </tr>
                </table>
                        <p>COMMENTS<p>
                <table id="tb2">
                        <tr>
                                <td><img src="images\yellow.png"><div>Anghela Abastillas<br>
                                Wow this is very informative!</div>
                                </td>
                                
                        </tr>
                        <tr>
                                <td><img src="images\peach.png">Thrys Formoso<br>
                                Life changing. I’ve always wanted to apply but never knew how to, thank you for this! 
                                </td>
                        </tr>
                </table>
                <table id="tb3">
                    <tr>
                        <td>You need to<u><a href="login.php" class="login_link2"> log in</u></a> to comment and like this post</td>
                    </tr>
                </table>
            </div>
        </div>
</form>

<div class="footer">Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br>
    <br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br> </div>
    </div>

</body>