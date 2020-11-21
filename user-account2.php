<?php
 require "header.php";
 include_once 'includes/db-inc.php';
?>
<style>
.nav-tabs .nav-link {
  color:green;
}

</style>
<ul class="nav nav-tabs" style="padding-top:10px">
  <li class="nav-item">
    <a class="nav-link" href="user-account.php">Collection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active" href="user-account2.php">Account Details</a>
  </li>
</ul> 

<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body mx-3">
      <form role="form" id="signupForm" action="includes/signup-inc.php"  method="POST">
      <div class="md-form mb-5">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" name="signup_uname" id="signup_uname" class="form-control" placeholder="Username" require 
        <?php if(isset($_GET['username'])){ echo 'value="'.$uname.'"';}?>">
      </div>
      <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" name="signup_email" id="signup_email" class="form-control" placeholder="Email">
      </div>


      <?php
        if(isset($_GET['email'])){
          echo '<div class="md-form mb-5" style="color:Red">'.$email.' already exists, click <a href="reset-form.php">here </a>to recover</div>' ;
        } else if(isset($_GET['borrow']) || isset($_GET['set'])){
          echo '<div class="md-form mb-5" style="padding-top:0px"> Already have an account? click <a href="login-form.php?set=1">here </a> to login</div>' ;
        }
      ?>
    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button type="submit" name="signup_submit" class="btn btn-success pl-5 pr-5" style="padding: 10px;">Sign up</button>
    </div>
    </form>
  </div>
</div>
</div>

