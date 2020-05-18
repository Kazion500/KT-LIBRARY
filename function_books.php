<?php
function books($image, $title) {


	$books = "
                <div class=\"col-md-4 my-3\">
                  <div class=\"card shadow bg-dark text-white \">
                    <img src=\"$image\" class=\"card-img-top\" height=\"300px\" width=\"100%\">
                     <div class=\"card-body p-0 \">
                       <h5 class=\"card-title\">$title</h5>
                       <p class=\"card-text mt-n2\">Build your skills</p>
                       <p class=\"mt-n3\">
                         <small><s class=\"line-through\">\$3</s></small>
                         <span class=\"price text-center\">\$5</span>
                       </p>
                       <a href=\"#\" class=\"btn btn-info btn-sm mb-2 mt-n2\">Add to Cart</a>
                     </div> 
                  </div>
                </div>    
            ";
echo $books;
}