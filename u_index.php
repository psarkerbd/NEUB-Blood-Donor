<?php //include("include/config.php");?>
<?php include("include/u_header.php");?>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>
              <a href="u_index.php"><li class='active'>  Home </li> </a>
			  <a href="u_donor.php"><li>  Donors  </li></a>
			  <a href="u_profile.php"><li> Edit Profile </li> </a>
			  <a href="u_gallery.php"><li> Gallery  </li> </a>
			  <a href="u_rules.php"><li> Rules  </li> </a>
			  <a href="logout.php"><li>  Logout   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
		<?php 	
					$sql = "select * from home";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						echo '<img src="admin/images/news/'.$arr['img'].'" height="280" width="900" style="margin-top:20px;margin-bottom:20px;">';
						echo '</br>';
						echo '<p style="text-align:justify;margin-bottom:20px;padding: 0px 10px 0px 10px;font-size:18px;">'.$arr['message'].'</p>';
						//echo $arr['img'];
                    }

	    ?>
			 
<?php 
	include("include/footer.php"); 
?>
		