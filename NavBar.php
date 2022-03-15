<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Beauty Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="NewProduct.php">New Product</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php 
          session_start();
          if(isset($_SESSION) && isset($_SESSION['id'])){
            echo  "<a class='btn disabled btn' href='#'>".$_SESSION['username']."</a>";
            echo "<a class='btn btn-danger' href='LogOut.php'>Log Out</a>";
          }
          else{
            echo "<a class='btn btn-primary' href='LogIn.php'>Log In</a>";
            echo "<a class='btn btn-success' href='SignIn.php'>Sign In</a>";
            session_destroy();
          }
        ?>
        

       
        
      </form>
    </div>
  </div>
</nav>