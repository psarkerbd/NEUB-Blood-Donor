<?php //include("include/config.php");?>
<?php include("include/u_header.php");?>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

	 <a href="u_index.php"><li>  Home </li> </a>
			  <a href="u_donor.php"><li>  Donors  </li></a>
			  <a href="u_profile.php"><li> Edit Profile </li> </a>
			  <a href="u_gallery.php"><li> Gallery  </li> </a>
			  <a href="u_rules.php"><li class='active'> Rules  </li> </a>
			<a href="logout.php"><li>  Logout   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
	<?php 	
					$sql = "select * from rules";
					$result=mysql_query($sql);	
					while($arr= mysql_fetch_array($result))
					{
						//echo $arr['rules_and_regulation'];
						echo '<p style="text-align:justify;margin-bottom:20px; padding: 0px 10px 0px 10px;font-size:18px;">'.$arr['rules_and_regulation'].'</p>';
                    }

	?>
			 
<?php include("include/footer.php");?>
		