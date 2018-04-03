<?php// include("include/config.php");?>
<?php include("include/header.php");?> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
<script src="letmein.js"></script>

			  <a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li class='active'>  Donors  </li></a>
			  <a href="registration.php" target="_blank"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
			
<div class="container" style="border: 3px solid black; margin:100px 100px 100px 100px; width: 750px; background-color:#f1f1f1; padding: 1em">
 
  <form method="post" class="form-horizontal" action="pass_exec.php" style="border: 2px double black; margin: 50px 50px 50px 50px;background-color:white">
    <div class="form-group" style="margin: 25px 25px 10px 0px">  <font style="color: red; size: 17px"> * </font>

	  <label class="control-label col-sm-2" for="username"><font face="georgia" style="size: 16px; text-shadow:1px 1px 0px red;"> Username: </font></label>
      <div class="col-sm-8">
       <input style=" border-radius:6px" required pattern="\w+" id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" />            
      </div>
    </div>
    <div class="form-group" style="margin: 25px 25px 10px 0px">
      <label class="control-label col-sm-2" for="email"><font face="georgia" style="size: 16px; text-shadow:1px 1px 0px black;"> Email: </font></label>
      <div class="col-sm-8">          
         <input style=" border-radius:6px" id="login-email" type="email" class="form-control" name="email" placeholder="enter your email" />
      </div>
    </div >
    <div class="form-group" style="margin: 0px 0px 5px 3px;padding: 1px">        
      <div class="col-sm-offset-1 col-sm-4">
	  <input style="width: 85px; height:30px" name="" type="submit" onclick="myFunction()" value="Submit" />
       
      </div>
    </div>
  </form>


 <script>
function myFunction() {
    document.getElementById("myForm").submit();
}
</script>


  
</div>


<div>
<?php include("include/footer.php");?> </div>