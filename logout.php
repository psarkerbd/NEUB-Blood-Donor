
<?php //include("include/config.php");?>
<?php include("include/u_header.php");?> 

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

			  <a href="u_index.php"><li>  Home </li> </a>
			  <a href="u_donor.php"><li class='active'>  Donors  </li></a>
			  <a href="u_profile.php"><li> Edit Profile </li> </a>
			  <a href="u_gallery.php"><li> Gallery  </li> </a>
			  <a href="u_rules.php"><li> Rules  </li> </a>
			  <a href="logout.php"><li>  Logout   </li></a>
			</ul>
		  
		</div>

<?php
   //session_start();
   unset($_SESSION["user_name"]);
   unset($_SESSION["password"]); 
   //$f = $_REQUEST[$full_name];
   ?>
   
   <div class="alert alert-success" style="border: 1px solid grey; margin: 100px 0px 0px 0px">
    <font style="font-size: 18px;"><?php echo "GoodBye " . $_SESSION['SESS_FIRST_NAME']. " !<br />You have Successfully Logged out" ?> </font> </div>
   
   <?php header('Refresh: 1; URL = login.php'); ?>
   
   <?php include("include/footer.php");?>