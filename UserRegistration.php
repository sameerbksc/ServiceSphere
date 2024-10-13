<?php
  include('dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Successfully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>
<div class="container pt-5" id="registration">
  <h2 class="text-center mb-4">Create an Account</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="UserRegistration.php" class="shadow-lg p-4 bg-light rounded" method="POST">
        <div class="form-group">
          <input type="text" class="form-control form-control-lg" placeholder="Name" name="rName" style="font-size: 12px; font-family: 'Roboto', sans-serif;">
          <i class="fas fa-user fa-lg animated-icon"></i>
        </div>
        <div class="form-group">
          <input type="email" class="form-control form-control-lg" placeholder="Email" name="rEmail" style="font-size: 12px; font-family: 'Roboto', sans-serif;">
          <i class="fas fa-envelope fa-lg animated-icon"></i>
          <small class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" placeholder="Password" name="rPassword" style="font-size: 12px; font-family: 'Roboto', sans-serif;">
          <i class="fas fa-lock fa-lg animated-icon"></i>
        </div>
        <button type="submit" class="btn btn-danger btn-block btn-lg">Sign Up</button>
        <em style="font-size:10px;" class="text-muted d-block mt-3">Note - By clicking Sign Up, you agree to our Terms.</em>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>

<!-- JavaScript for animated icons -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const animatedIcons = document.querySelectorAll('.animated-icon');
    animatedIcons.forEach(icon => {
      icon.addEventListener('mouseenter', function() {
        this.classList.add('animate__animated', 'animate__bounce');
      });
      icon.addEventListener('animationend', function() {
        this.classList.remove('animate__animated', 'animate__bounce');
      });
    });
  });
</script>

