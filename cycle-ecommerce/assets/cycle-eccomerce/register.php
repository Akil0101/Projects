<?php 
require_once("navbar.php");
require_once("banner.php");
?>
   
   
   <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Register Form</h1>
               <form action="/action_page.php">
               <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>

                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Password " name="password">
                  </div>

                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Confirm Password" name="cpassword">
                  </div>

                  
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Mobile" name="mobile">

                  </div>

                  
                
                  
                  <div class="form-group mt-5">
                     <textarea  class="form-control mt-5" placeholder="Address" name="address"></textarea>
                  </div>

                 
                  <div class="form-group">
                     <select name="state"  class="email-bt1 form-control" placeholder="state" name="state">
                        <option value="">-select state-</option>
                        <option value="1">Gujrat</option>
                        <option value="2">Madhya pradesh</option>
                        <option value="3">Rajsthan</option>
                        <option value="4">Mahrastra</option>
                     </select>
                  </div>


                  <div class="form-group"> 
                    <div class="row">
                  <div class="col-md-4 mt-3">      
                  <input type="submit" name="register" value="Register" class="btn btn-lg btn-primary">
                  </div>
                  <div class="col-md-4 mt-3">    
                  <input type="reset" name="reset" value="Reset" class="btn btn-lg btn-danger float-left">
                  </div>
                 </div>
          
                  <div class="form-group">
            <b class="text-white">Already have an account ? &nbsp; <a href="login.php">Login here</a></b>
            </div>     
                  
         </form>
          
          
         </div>
            
         </div>
      </div>
          
      </div>
          
      </div>
      <!-- contact section end -->
   <?php 

require_once("footer.php");
   ?>