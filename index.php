<?php
    require ("db_con.php");
    $showUsersSql = $conn->prepare ("Select * from post");
    $showUsersSql->execute();
    $showUsers = $showUsersSql->fetchAll(); 
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
                <a href="index.php" class="home_link">Home</a>
                    <a href="login.php" class="login_link">
                        <button type="submit" id="loginbtn">Log in</button>
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
        <H1> Share your thoughts <br> with the world. </br> </H1>
            <button type="submit" id="btn" style="vertical-align:middle"><span><a href="login.php">Become a Blogger</a></span></button>
        </div>

        <div class="bod2">
            <div class="flex-container">
            <?php foreach ($showUsers as $usersList): ?>
                <div class="text-contain">
                    <div class="img_container3">
                        <img src="images\laptop.png" id="laptop">
                    </div>
                    <div class="info">
                            <div class="text">
                            <p><?= $usersList['date']; ?> by <?= $usersList['userID']; ?></p>
                            <h1><?= $usersList['title']; ?></h1>
                            <p><?= $usersList['post']; ?></p>
                            </div>
                    
                            <button type="submit" id="rdmebtn" style="vertical-align:middle"><span><a href="visitor_post.php">Read More</a></span></button>
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="bod3">
            <div class="table_container">
                <table id="tb1">
                        <tr> 
                            <td> 
                                <div class="heart_btn"><Button onclick="Toggle1()" id="btnh1" class="h_btn1"><i class="fas fa-heart"></i></Button>
                                <p id="h_btn_txt1">2 people liked this</p>
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