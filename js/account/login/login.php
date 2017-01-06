
<?php
  session_start();
  if (isset($_SESSION['greska']) && $_SESSION['greska']==1) {
    $greska = "Invalid username or password";
    $_SESSION['greska'] = 0;
  }
?>
<div class="container">
  <div class="row mid">
    <?php
        if(isset($_SESSION['user'])){
    ?>
        You are  already loged in... <div ng-controller="MainController "ng-click="toCategories()" class='btn btn-info'>Help someone!</div>
    <?php
        } else {
      ?>
    <div class="col-md-6 col-md-offset-3">
      
      <h1>Login</h1>
    </div>
    <div class="col-md-6 col-md-offset-3">
     
      <div class="row well well-lg">
      <form action="/js/account/login/login_post.php" method="post">

        <div class="form-group">
          

          <input type="text" name="user" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-group">
          

          <input type="password" name="pass" class="form-control" placeholder="Password" required>
        </div>

        <div class="form-group">
          <?php echo $greska; ?>
        </div>

        <div>
          <button class="btn btn-default btn-lg btn-login" type="submit">
            Login
          </button>
          <a class="btn .btn-default btn-lg btn-register" ng-href="/{{'#/signup'}}">
            Register
          </a>
        </div>

        </div>
      </form>
    </div>
    <?php
        }
    ?>
  </div>
</div>