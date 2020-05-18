<?php 
include 'header.php';
include 'nav.php';

?>



<section>
	<div class="container w-75">
		<div class="row text-center">
			<?php
		    	books("assets/covers/bc1.jpg","html");
            	books("assets/covers/bc2.jpg","html");
                books("assets/covers/bc3.jpg","html");
                books("assets/covers/bc4.jpg","html");
                books("assets/covers/bc5.jpg","html");
                books("assets/covers/bc6.jpg","html");
                books("assets/covers/bc7.jpg","html");
                books("assets/covers/bc8.jpg","html");
			?>	
		</div>
	</div>
</section>





<?php 
include 'footer.php';
require 'script.php';
?>

</body>
</html>