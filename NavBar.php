
<nav class="navbar navbar-light" style="background-color: #B4C3BA;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
  <img src="assets/logo.png" alt="" width="70" height="70" class="d-inline-block align-text-top">
  <img src="assets/Beauty.png" alt="" width="250" height="70" class="d-inline-block align-text-top">
     
  

  <a class="navbar-brand" href="index.php"> </a>

  <ul class="nav justify-content-end">
     
    
    <?php 
        session_start();
        
        if(isset($_SESSION) && isset($_SESSION['id'])){
          echo "<li class='nav-item'>";
          echo  "<a class='btn btn-outline-success me-2' href='#'>".$_SESSION['username']."</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='btn btn-danger' href='LogOut.php'>Log Out</a>";
          echo "</li>";

        }
        else{
          echo "<li class='nav-item '>";
          echo "<a class='btn btn-outline-success me-2' href='LogIn.php'>Log In</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='btn btn-success' href='SignIn.php'>Sign up</a>";
          echo "</li>";
          session_destroy();
        }
      ?>
        </ul>    
  </div>
</nav>