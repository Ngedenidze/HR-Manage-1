<?php
  session_start();

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
  <body onLoad="resize()">
      <!-- wrapper class --->



    <!-- Wrapper class  --->


      <div class="top_navbar">
  <!-- End of hamburger class  --->
        <div class="top_menu">

            <div class="logo"><img src="img/logo-light.png" alt="Molere"></div>



                    <ul>
                      <li>
                        <a href="home.php" class="active">
                        <span class="title">Home</span>
                        </a>
                    </li>
                      <li>

                        <a href="about-us.php">
                        <!-- <span class="icon"><i class="fas fa-info"></i></span> -->
                        <span class="title">About Us</span>
                        </a>
                    </li>
                      <li>
                        <a href="contact.php">
                        <!-- <span class="icon"><i class="fas fa-phone"></i></span> -->
                        <span class="title">Contact</span>
                        </a>
                    </li>
                      <li>
                          <a href="application.php">
                          <!-- <span class="icon"> <i class="fas fa-rocket rocket"></i></span> -->
                          <span class="title">Application</span>
                          </a>
                        </li>
                        <li class="dropdown">
                          <!-- <span class="icon"> <i class="fas fa-rocket rocket"></i></span> -->
                            <span class="title dropbtn">Settings</span>
                            <div class="dropdown-content">
                               <a href="signup.php"><i class="fas fa-user-plus"> Sign up</i></a>
                                 <a href="index.php"><i class="fas fa-sign-in-alt"> Sign in</i></a
                             </div>
                          </li>

                    </ul>



                          <!-- <?php
                            if(isset($_SESSION["useruid"])){
                              ?>
                              <li>
                                <a href="profile.php"><i class="fas fa-user-alt"></i></a>
                                  <span class="tooltip" id="tooltip_5">Profile Page</span>
                                </li>
                                <li>
                                  <a href="includes/logout.inc.php"><i class="fas fa-sign-out-alt"></i></a>
                                  <span class="tooltip" id="tooltip_6">Log out</span>
                                </li>
                            <?php
                            }
                              else { ?> -->


                  <!--
                            <?php  }
                          ?> -->
                          <!--
                                  <li><a href="settings.php"><i class="fas fa-cog"></i></a>
                                  <span class="tooltip" id="tooltip_7">Settings</span>
                                </li> -->
          </div>
          <!-- End of top_menu class  --->
        </div>
        <!-- End of top_navbar class  --- Main Class(login & center)-->

 