<?php
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Sign Up</title>
    <link rel="stylesheet" href="styles/loginsignup.css">
</head>

<body>
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="index.php">Home</a>
                    <a href="login.php">
                        <button type="submit" id="loginbtn">Log in</button>
                    </a>
            </div>
    </div>

    <div class="body-container">
        <div class="container">
            <div class="left">
                <p class="welcome">- Welcome! 👋</p>
                <h1>Sign Up</h1>
                <div class="bottom-left">
                    <p>Already have an account?</p>
                    <a href="login.php">Sign In</a>
                </div>
            </div>
            <div class="right">
                <form action="#">
                    <input type="username" id="username" name="username" placeholder="Enter your username">
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <input type="password" id="password" name="password" placeholder="Enter your password">
					<input type="role" id="role" name="role" placeholder="Enter your role">
                    <button type="submit" action="regsave.php" id="btn">Register -></button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>