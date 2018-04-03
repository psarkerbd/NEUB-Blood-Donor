<?php //include("include/config.php");?>
<?php include("include/u_header.php");?>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
		
		<a href="u_index.php"><li>  Home </li> </a>
			  <a href="u_donor.php"><li>  Donors  </li></a>
			  <a href="u_profile.php"><li> Edit Profile</li> </a>
			  <a href="u_gallery.php"><li class='active'> Gallery  </li> </a>
			  <a href="u_rules.php"><li> Rules  </li> </a>
			  <a href="logout.php"><li>  Logout   </li></a>
			</ul>
		  
		</div>
		   <div id="body">	
	    <div style="height:500px;width:800px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">

		    
			<?php 	
					$sql = "select * from gallery";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						
						echo '<img src="admin/images/gallery/'.$arr['photo'].'" height="200" width="350" style="margin-top:20px;margin-bottom:20px;">';
					
						
                    }

	    ?>
			
		</div>
		
		
			 
<?php include("include/footer.php");?>