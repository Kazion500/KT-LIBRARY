<body>
     <!------------------------NAVBAR------------------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light" id="background-navbar">
      <div class="container mx-auto w-75">
        <a class="navbar-brand" href="index.php">
          <img src="assets/icons/book.png" class="d-inline-block logo-img" alt="logo">
          <span id="logo-text" class="d-inline-block px-2 pb-1 h1 align-middle my-2">KT LIBRARY</span>
        </a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarbtn" aria-controls="navbarbtn" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse collapse" id="navbarbtn">
           <div class="mx-auto"></div>
           <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About us</a>
                </li>
           </ul>


       </div>

           
      </div>
           <?php 
                if (isset($_SESSION["username"])) 
                { 
                  echo '<div class="mx-auto"></div>';
                  echo '<p > <a href="index.php" class="username_profile text-white">';
                  echo $_SESSION["username"];
                  echo "</a></p>";
                  echo '<img src="assets/icons/user.png" alt="" class="ml-3">
                        <form method="POST" action="includes/logout.inc.php" class="pb-3">
                        <button class="btn btn-link text-white" type="submit" name="logout-submit">Logout</button>
                        </form>
                        ';
                }

           ?>
           
    </nav>
    <!------------------------END OF NAVBAR------------------------------------------>