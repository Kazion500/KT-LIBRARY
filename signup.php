<?php 
include 'header.php';
include 'nav.php';
?>

<section>
	<div class="container signup-wrapper">
		<div class="row">
		  <div class="col-md-6 mx-auto">
			<p class="signup-heading text-center pb-3">SIGN UP</p>
		  </div>
		</div>
	    <form class="mx-auto form-wrapper" action="includes/signup.inc.php" method="POST">
	    	<div class="row ">
		    <div class="form-group col-md-6">
		      <label for="Firstname">Firstname</label>
		      <input type="text" class="form-control" name="firstname" placeholder="Firstname">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Lastname">Lastname</label>
		      <input type="text" class="form-control" name="lastname" placeholder="Lastname">
		    </div>
		  </div>

		  <div class="row">
		    <div class="form-group col-md-6">
		      <label for="Email">Email</label>
		      <input type="text" class="form-control" name="email" placeholder="Email">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Username">Username</label>
		      <input type="text" class="form-control" name="username" placeholder="Username">
		    </div>
		  </div>

		  <div class="row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control" name="password" placeholder="Password">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="Confirm password">Confirm password</label>
		      <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
		    </div>
		  </div>
		  <div class="row">
		  	<div class="form-group col-md-6">
		      <label for="State">State</label>
		      <select id="State" name="state" class="form-control">
		        <option selected>Choose...</option>
		        <option>...</option>
		      </select>
		    </div>


		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" class="form-control" name="city" placeholder="City">
		    </div>
		  </div>

		   <div class="row">
		    <div class="form-group col-md-6">
		      <label for="Phone number">Phone number</label>
		      <input type="text" class="form-control" name="phoneNumber" placeholder="Phone number">
		    </div>
		  </div>


                <p class="text-center pt-2">Not yet a member? <a href="login.php">Login</a></p>
		  <div class="btn-cont mx-auto">
		    <button type="submit" id="signup" name="signup-submit" class="btn btn-info btn-cont mt-1">Sign up</button>
		  </div>
        </form>
	</div>
</section>

<?php 
include 'script.php';
?>

</body>
</html>