
<?php
@extract($_POST);
if(isset($sub))
{
session_start();
$_SESSION['authenticate']=true;
    header("location: test3/home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta name="description:" content="This is the Second page of this website">
    <meta name="author" content="Nika Gedenidze, Giorgi Gogitidze">
    <meta name="keywords" content="HTML,sample website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9cb24db5e9.js" crossorigin="anonymous"></script>


    <title>Employee Management System</title>
    <title></title>
    </head>
<body onLoad="resize()" id="login">
      <!-- wrapper class --->
  <div class="main-content-index">

  <div class = "company-logo">
    <img src="img/logo-dark.png" alt="logo">
</div>  

  <div class="login">
 


        <div class="center">
            <h1>Sign in</h1>
            <form method="post" action="includes/login.inc.php">
                <div class="txt_field">
                    <input type="text" name = "uid">
                    <span></span>
                    <Label>Username/Email</Label>
                </div>
                <div class="txt_field">
                    <input type="password" name="pwd" >
                    <span></span>
                    <Label>Password</Label>
                </div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" name="submit" value="Sign in" />
                <div class="signup_link">
                    Not a member? <a href="signup.php">Sign Up</a>
                </div>
            </form>

            <?php
              if (isset($_GET["error"])) {
                if($_GET["error"] == "emptyinput"){
                  echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login information!</p>"; 
                }
              }
            ?>
        </div>
    </div>


            </body>
            </html>