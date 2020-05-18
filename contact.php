<?php 
include 'header.php';
include 'nav.php';
?>

<section>
	<div class="container signup-wrapper">
		<div class="row">
		  <div class="col-md-6 mx-auto">
			<p class="signup-heading text-center pb-3">CONTACT US</p>
		  </div>
		</div>
		
	    <form class="mx-auto form-wrapper" action="" method="POST">
	      <div class="form-row">
		    <div class="form-group col-md-6 mx-auto ">
		      <label for="Fullname">Fullname</label>
		      <input type="text" class="form-control" name="fullname" placeholder="Fullname">
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-6 mx-auto ">
		      <label for="Subject">Subject</label>
		      <input type="text" class="form-control" name="subject" placeholder="Subject">
		    </div>
		  </div>

		  <div class="form-row">
		    <div class="form-group col-md-6 mx-auto ">
		      <label for="Email">Email</label>
		      <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-row">
		    <div class="form-group col-md-6 mx-auto">
		      <label for="Message">Message</label>
		      <textarea class="form-control px-4 py-2" name="message" placeholder="Message"></textarea> 
            </div>
          </div>

		  <div class="btn-cont mx-auto">
		    <button type="submit" id="signup" name="submit-message" class="btn btn-info btn-cont my-2 p-2">SEND</button>
		  </div>
        </form>
	</div>


</section>
<?php 
include 'script.php';
?>
</body>
</html>