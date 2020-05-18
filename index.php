<?php 
include 'header.php';
include 'nav.php';
?>

   <div class="container mx-auto w-75 banner-img">
        <div class="row">
            <div class="col-md-6 mx-auto banner-text1">
             <p class="text-white banner-h-text">WELCOME TO <span class="white-black">KT LIBRARY</span></p> 
               <p class="banner-text text-white text-center">For free downloads sign up by simply clicking the button below if you already have an account click
                <a href="login.php">Log in</a> </p>
                  <div class="btn-cont mx-auto mt-4">
                  <a class="btn btn-outline-light" id="signup" name="submit-signup" href="signup.php">SIGN UP</a>
                  </div>
            </div>
        </div>
    </div>



    <section>
      <div class="container mx-auto w-75">


<!--------------------SEARCH-BAR-------------------------------------------->
            <div class="row mt-5">
              <div class="col-md-4 pl-0">

                <form action="" method="GET">
                  <input type="search" class="form-control float-left" name="search" style="width:84% !important";  placeholder="Book Category/Title">

                  <button type="submit" name="submit-search" class="btn btn-info rounded-circle float-right" style="width:13% !important"; style="height:20% !important;">
                   <img src="assets/icons/search.png" style="width:100% !important;" >
                  </button>

                </form>
              </div>
            </div>
<!---------------END--OF---SEARCH-BAR-------------------------------------------->

        <div class="row">
          <div class="col-md-4">
<!--------------------CATEGORIES------------------------------------------->
            <h5 class="text-center pt-4 pb-2">BOOK CATEGORY</h5>

            <ul class="list-group ml-n3 mr-3">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="">Arts & Music</a>
                <span class="badge badge-info badge-pill">1000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Boigraphies</a>
                <span class="badge badge-info badge-pill">500</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Business</a>
                <span class="badge badge-info badge-pill">2000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Comics</a>
                <span class="badge badge-info badge-pill">500</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Computers & Tech</a>
                <span class="badge badge-info badge-pill">2000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Cooking</a>
                <span class="badge badge-info badge-pill">300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Edu & Reference</a>
                <span class="badge badge-info badge-pill">700</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Entertainment</a>
                <span class="badge badge-info badge-pill">500</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Health & Fitness</a>
                <span class="badge badge-info badge-pill">1000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Medical</a>
                <span class="badge badge-info badge-pill">1500</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Religion</a>
                <span class="badge badge-info badge-pill">1300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                 <a href="">Parenting</a>
                <span class="badge badge-info badge-pill">300</span>
              </li>
            </ul>
          </div>
<!-----------------END--OF-CATEGORIES------------------------------------------->

<!--------------------BOOK COVERS------------------------------------------->
          <div class="col-md-8 p-0">
            <h5 class="text-center pt-4 pb-2">BOOK COVERS</h5>
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
<!------------------END--OF--BOOK COVERS------------------------------------------->

        </div>
      </div>
    </section>
    
    <?php 
    require 'script.php';
    require 'footer.php';
    ?>

