
 <?php 
      include_once 'menu.php';
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
  
   
  

    <main>


                  <!-- Wrapper class  --->
                <div class="main_container">
                  

                  <h1>Joshua the best</h1>
                      <?php  if(isset($_SESSION["useruid"])){
                    ?>
                    <p>Hello There! <?php $_SESSION["useruid"] ?> </p>
                  <?php
                } 
              ?>
              <div class="items">
            sga

              </div>
              <div class="items">

              sagas
              </div>
              
              <div class="items">
            sagasas
              
              </div>
              <div class="items">
            sagasas
              
              </div>
              <div class="items">
            sagasas
              
              </div>
              <div class="items">
            sagasas
              
              </div>
              <div class="items">
            sagasas
              
              </div>
              <div class="items">
            sagasas
              
              </div>
              
              
              </div>


    </main>
    

  <footer>
  <?php 
  include_once 'footer.php';
?>
  </footer>




  

</body>
</html>
