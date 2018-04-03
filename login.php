<?php  include("include/header.php");?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
<script src="letmein.js"></script>

		<a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="registration.php" target="_blank"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li class='active'>  Login   </li></a>
			</ul>
		  
		</div>
		
	            <div class="container" style="border: 3px solid black; margin:100px 100px 100px 100px; width: 750px; height:480px; background:grey;">
				
        <div id="loginbox" style="margin:80px 55px 50px 60px; width: 600px; height: 50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            
			<div class="panel panel-info" style="border-radius:5px;" >
                    
					<div class="panel-heading" style="height: auto">
                        
						<div class="panel-title">Sign In</div>
                        
						<div style="text-shadow:1px 1px 1px ; float:right; font-size: 85%; position: relative; top:-10px"><a href="pass.php">Forgot password?</a></div>
                    
					</div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form name="loginform" action="login_exec.php" method="post" onsubmit="return checkForm(this); ">
                                    
                            
				
							
							
							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input required pattern="\w+" id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" />                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" title="Type your password" required pattern="\w+">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      
									  <input name="" type="submit" value="Login" class="btn btn-success" />
									  
                                      <a id="btn-fblogin" href="#" class="btn btn-primary"> Login with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="apply.php" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div> 
						
                    </div>  
        </div>
		
		<?php include("include/footer.php");?>
		
		</div>
        