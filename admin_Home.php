<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Software Technology Final Exam</title>

    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="header">
        <img src="images\Logo.png" width="150px" height="30px">

            <div class="header-right">
                <a href="admin_Home.php"> Home </a>
                <a href="admin_view_profile.php">Profile</a>
                <a href="admin_panel.php">
                    <button id="loginbtn">Admin </button>
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
        <H1> Welcome <br> Admin! </br> </H1>
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
                <button type="submit" id="rdmebtn" style="vertical-align:middle"><span><a href="post.php">Read More</a></span></button>
            </div>
        </div>
        <div class="bod3">
            <div class="table_container">
                <table id="tb1">
                        <tr> 
                            <td><img src="images\hearteu.png" id="hearteu">2 people liked this</td>
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
            </div>
        </div>
</form>

<div class="footer">Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br>
    <br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br> </div>
    </div>

</body>