 <!DOCTYPE html>
<html>
	<head>
	  <title>NEUB BD</title>
	  <link href="css/main.css" rel="stylesheet" type="text/css">
	</head>
	
	
	<?php include("include/config.php");
require_once("auth.php");


				$id=$_SESSION['SESS_MEMBER_ID'];
				
				$sql="select * from user where nid='$id' ";
				$res=mysql_query($sql);
				$s_a=mysql_fetch_array($res);
				
				
				?>

	<body>
	
	

	  <div id="container">
	    
		<div id="header"> <img src="images/image.jpg" alt="NEUB Blood Donor" title="NEUB Blood Donor" style="width:960px;height:105px;"> </div>
	    
		<!-- Search button Code 
		<div id="skip-menu"></div>
    <div class="column-right">
      <div class="box"> !--->
        
		<!---<form action="u_search.php" method="post" style="margin-left:630px; margin-bottom:10px; margin-right:-1px;">
		
		
		
			<select name="blood_group">
								<option value="">Search Donors</option>
								<option value="A+">A(+ve)</option>
								<option value="A-">A(-ve)</option>
								<option value="B+">B(+ve)</option>
								<option value="B-">B(-ve)</option>
								<option value="O+">O(+ve)</option>
								<option value="O-">O(-ve)</option>
								<option value="AB+">AB(+ve)</option>
								<option value="AB-">AB(-ve)</option>
							</select>
			
			<input type="submit" name="search" value="Search" style="width:55px;border-radius:5px; background-color:#696969; color:white;" title="Search">
		
		</form>!-->
		
		<!-- End of Search button Code !--->
		<div id="navigation">
		  <ul>