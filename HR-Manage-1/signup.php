
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
  <body onLoad="resize()" id="signup">

<div class="main-content-index" id="signup-index" >
  <div class = "company-logo">
    <img src="img/logo-dark.png" alt="logo">
  </div>  
      <div class="login">

        <div class="center">
            <h1>Sign Up</h1>
              <form action="includes/signup.inc.php" method="post">
                      <div class="txt_field">
                        <input type="text" name="name" required/>
                        <span></span>
                        <Label>Full name</Label>
                      </div>

                      <div class="txt_field">
                        <input type="text" name="email" required/>
                        <span></span>
                        <Label>Email</Label>
                      </div>

                      <div class="txt_field">
                        <input type="text" name="uid" required/>
                        <span></span>
                        <Label>Username</Label>
                      </div>

                      <div class="txt_field">
                        <input type="password" name="pwd" required/>
                        <span></span>
                        <Label>Password</Label>
                      </div>

                      <div class="txt_field">
                        <input type="password" name="pwdrepeat" required/>
                        <span></span>
                        <Label>Repeat the password</Label>
                      </div>

                      <input type="submit" name="submit" value="Sign up" />
                      <div class="signup_link">
                              Already a member? <a href="index.php">Sign in</a>
                      </div>
              </form>
          <?php
            if (isset($_GET["error"])) {
              if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
              }
              else if ($_GET["error"] == "invaliduid"){
                  echo "<p>Choose a proper username!</p>";
              }
              else if ($_GET["error"] == "invalidemail"){
                  echo "<p>Choose a proper email!</p>";
              }
              else if ($_GET["error"] == "passwordsdontmatch"){
                  echo "<p>Passwords doesn't match!</p>";
              }
              else if ($_GET["error"] == "stmtfailed"){
                  echo "<p>Something went wrong, try again!</p>";
              }
              else if ($_GET["error"] == "usernametaken"){
                  echo "<p>Username already taken!</p>";
              }
              else if ($_GET["error"] == "none"){
                  echo "<p>You have signed up!</p>";
              }
            }
          ?>
        </div>
        <!-- //center-->
      </div>
      <!-- //login -->
    </div>
    <!-- //main-content -->

</body>
</html>
