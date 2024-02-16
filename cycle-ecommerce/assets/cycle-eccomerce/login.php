<?php 
require_once("navbar.php");
require_once("banner.php");
?>
   
   
   <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Login Form</h1>
               <form action="/action_page.php">
               
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Password " name="password">
                  </div>
               </form>
               <div class="send_btn"><a href="#">Login</a>
            </div>
            <div class="form-group log-btn">
            <b><a href="forgetpassword.php">Forget Password ?</a></b>
            </div>
            <div class="form-group">
            <b class="text-white">Don't have an account ? &nbsp; <a href="register.php">Create Account</a></b>
            </div>
         </div>
      </div>
          
      </div>
          
      </div>
      <!-- contact section end -->
   <?php 

require_once("footer.php");
   ?>