<?php
    require ('db_con.php');
    if(isset($_SESSION["type"]))
{
 header("location:index.php");
}
$message = '';
if(isset($_POST["login"]))
{
 if(empty($_POST["email"]) || empty($_POST["password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM user 
  WHERE email = email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'email' => $_POST["email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if($row["user_status"] == 'Active')
    {
     if(password_verify($_POST["password"], $row["password"]))
     {
      $_SESSION["type"] = $row["user_type"];
      header("location: index.php");
     }
     else
     {
      $message = '<div class="alert alert-danger">Wrong Password</div>';
     }
    }
    else
    {
     $message = '<div class="alert alert-danger">Your Account has been disabled, please contact admin</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
}

                        ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulag | Log In</title>
    <link rel="stylesheet" href="styles/loginsignup.css">
</head>

<body>
    <form name="register" action="validatelogin.php" method="POST">
    <div class="header">
        <img src="images/Logo.png" width="150px" height="30px">
            <div class="header-right">
                <a href="index.php" class="link">Home</a>
                    <a href="login.php" class="link">
                        <button type="submit" id="loginbtn">Log in</button>
                    </a>
            </div>
    </div>

    <div class="body-container">
        <div class="container">
            <div class="left">
                <p class="welcome">- Welcome back! 👋</p>
                <h1>Log In</h1>
                <div class="bottom-left">
                    <p>Don't have an account?</p>
                    <a href="signup.php">Join us!</a>
                </div>
            </div>
            <div class="right">
                <form action="#">
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <input type="password" id="password" name="password" placeholder="Enter your password">
                    <button type="submit" id="btn">Log In -></button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        Finals Project for CIT236 <br><u><a href="https://github.com/keiruu/CIT236-Blogging-System" class="github-link" target="_blank">Github Repository</a></u></br><br> ABASTILLAS | FORMOSO | PARCON | SOQUENO | UNATING</br>
    </div>
</body>