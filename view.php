<?php// include("include/config.php");?>
<?php include("include/header.php");?> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

			  <a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li class='active'>  Donors  </li></a>
			  <a href="registration.php" target="_blank"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		
		
	    <div style="margin: 50px 0px 50px 0px ; border: 2px solid black;">


		<h1> Donor Profile </h1>
		<?php $sql="select * from user where id='$_REQUEST[id]' ";
		$res=mysql_query($sql);
		$arr=mysql_fetch_array($res);
		?>
		
			<tr>
				<td><img src="images/donors/<?php echo $arr['photo']; ?>" height="150" width="180" style="border:2px solid black;" alt="Donor's Picture"></td>
				<td></td>
			
			</tr>
			
			<table style="text-align: center; margin: 15px 0px 0px 0px; font-family: times new roman; font-size: 18px" class="table table-hover">
			
			<tr>
				<td>Name</td>
				<td> <?php echo $arr['full_name']; ?></td>
			</tr>
			<tr>
				<td>Father Name</td>
				<td> <?php echo $arr['father_name']; ?></td>
			</tr>
			<tr>
				<td>Mother Name</td>
				<td><?php echo $arr['mother_name']; ?></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><?php echo $arr['phone']; ?>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $arr['email']; ?>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td><?php 
									if($arr['blood_group']=="A+"){ echo "A(+ve)"; }
									if($arr['blood_group']=="A-"){ echo "A(-ve)"; }
									if($arr['blood_group']=="B+"){ echo "B(+ve)"; }
									if($arr['blood_group']=="B-"){ echo "B(-ve)"; }
									if($arr['blood_group']=="O+"){ echo "O(+ve)"; }
									if($arr['blood_group']=="O-"){ echo "O(-ve)"; }
									if($arr['blood_group']=="AB+"){ echo "AB(+ve)"; }
									if($arr['blood_group']=="AB-"){ echo "AB(-ve)"; }
								?>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><?php echo $arr['gender']; ?>
			</tr>

			<tr>
				<td>Status</td>
				<td><?php echo $arr['status']; ?>
				</td>
			</tr>
			
			</table>

</div>



<div>

<?php include("include/footer.php"); ?> </div>