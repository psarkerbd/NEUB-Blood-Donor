<?php //include("include/config.php");?>
<?php include("include/header.php");?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

		<a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="registration.php" target="_blank"><li> Apply </li> </a>
			  <a href="gallery.php"><li class='active'> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		  
		</div>
		   <div id="body">	
	    <div style="height:500px;width:800px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:70px;margin-bottom:50px;padding:10px;">

		    
			<?php 	
					$sql = "select * from gallery";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						
						echo '<img src="admin/images/gallery/'.$arr['photo'].'" height="300" width="350" style="margin-top:20px;margin-bottom:20px;">';
					
						
                    }

	    ?>
			
		</div>
		
		
			 
<?php include("include/footer.php");?>