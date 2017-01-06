<?php
  session_start();
  include("../../../consts.php");
?>
<div class="container">
  <div class="row mid">
    <div class="col-sm-12">
      <h1>Sign up</h1>
    </div>
    <div class="col-sm-12">
      <div class="col-md-6 col-md-offset-3">
     
      <div class="row well well-lg">
      <form action="/js/account/signup/signup_post.php" method="post">

        <div class="form-group">
          <label></label>

          <input type="text" placeholder="Username"  name="user" class="form-control"
                 required/>
        </div>

        <div class="form-group">
          <label></label>

          <input type="email" placeholder="Email" name="email" class="form-control" 
                 required
                 mongoose-error/>
          <p class="help-block" ng-show="form.email.$error.email && vm.submitted">
            Doesn't look like a valid email.
          </p>
        </div>

        <div class="form-group" >
          <label></label>

          <input type="password" placeholder="Password" name="pass" class="form-control"
                 required />
          
        </div>

        <div class="form-group" >
          <label></label>
          <input type="password" placeholder="Confirm Password" name="confirmPass" class="form-control"  required/>
        </div>
        <p class="help-box">
          <?php
          if (isset($_SESSION['greska'])) {
            $greska = $_SESSION['greska'];
            if ($greska == GRESKA_POSTOJI_ACC)
              echo "Username already in use";
            else if ($greska == GRESKA_PASSWORD_MATCH)
              echo "Passwords don't match";
          }
          unset($_SESSION['greska']);
          ?>
        </p>
        <div>
          <button class="btn btn-default btn-lg btn-register" type="submit">
            Sign up
          </button>

        </div>

        <div class="row">
          <div class="col-sm-4 col-md-3">
            <oauth-buttons classes="btn-block"></oauth-buttons>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>