<!DOCTYPE html>
<html>
	<head>
	  <title>NEUB BD</title>
	  <link href="css/main.css" rel="stylesheet" type="text/css">
	</head>

	
<?php include("include/config.php");

	    session_start();
		unset($_SESSION['SESS_MEMBER_ID']);
		unset($_SESSION['SESS_FIRST_NAME']);
		unset($_SESSION['SESS_LAST_NAME']);

?>
	
	
	
	
	<body style="border: 10px solid black">

	  <div id="container">
	    
		<div id="header"> 
		
		<a href="index.php">
		
		<img src="admin/images/image.jpg" alt="NEUB Blood Donor" title="NEUB Blood Donor" style="width:950px; height:100px; text-align: right;">
		
		</a>
		
		<div id="slogan"> A Community of Voluntary Blood Donors of Bangladesh </div> 
		
		</div>
	    
		<!-- Search button Code 
		<div id="skip-menu"></div>
    <div class="column-right">
      <div class="box"> !--->
        
		<form action="search.php" method="post" style="margin-top: 40px; margin-left:670px; margin-bottom:20px; margin-right:-1px;">
		<!---
		<input type="text" name="search" placeholder="  Search for...." style="border-radius:4px;" autocomplete="on" required>
		!-->
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
							
							
						<span class="glyphicon glyphicon-search"></span>
						
						<input type="submit" name="search" value="Search"  title="Search" class="btn btn-primary" />
		
		</form>
		
		<!-- End of Search button Code !--->
		<div id="navigation">
		  <ul>