<?php 
include 'header.php';
include 'nav.php';
?>

<section>
	<div class="container signup-wrapper">
		<div class="row">
		  <div class="col-md-6 mx-auto">
			<p class="signup-heading text-center">Reset your password</p>
		  </div>
		</div>
	    <form class="mx-auto form-wrapper" action="" method="POST">
	    	<p class="text-center">You will recieve a message in your email with the link to reset your password.</p>
	    	<div class="form-row">

		    <div class="form-group col-md-6 mx-auto ">
		      <input type="email" class="form-control" id="resetPWD" name="email-reset" placeholder="Enter your email-address">
		    </div>
		  </div>

		  <div class="btn-cont mx-auto">
		    <button type="submit" id="signup" name="reset-submit" class="btn btn-info btn-cont my-1 p-2">Reset</button>
		  </div>
        </form>
	</div>
</section>

<?php 
include 'script.php';
?>

</body>
</html>