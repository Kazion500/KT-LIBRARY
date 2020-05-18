<?php 
include 'header.php';
include 'nav.php';
?>

<section>
	<div class="container signup-wrapper">
		<div class="row">
		  <div class="col-md-6 mx-auto">
			<p class="signup-heading text-center pb-3">LOGIN</p>
		  </div>
		</div>
	    <form class="mx-auto form-wrapper" action="includes/login.inc.php" method="POST">
	    	<div class="form-row">
		    <div class="form-group col-md-6 mx-auto ">
		    	<label for="Username or Email">Username or Email</label>
		      <input type="text" class="form-control" name="mailuid" placeholder="Username or email-address">
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-6 mx-auto ">
		      <label for="Username or Email">Password</label>
		      <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>

          <p class="text-center pt-2">Forgot password? <a href="reset-password.php">Reset</a></p>
          <p class="text-center">Not yet a member? <a href="signup.php">Sign up</a></p>
		  <div class="btn-cont mx-auto">
		    <button type="submit" id="signup" name="login-submit" class="btn btn-info btn-cont my-1 p-2">Log in</button>
		  </div>
        </form>
	</div>
</section>

<?php 
include 'script.php';
?>

</body>
</html>