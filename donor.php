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
		  
		</div>
		
		
	    <div id="body">
	
	<div style="height:520px;width:750px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">
	
	<?php 
		$sql="select * from user order by nid asc ";
		$res=mysql_query($sql);
	?>	
		<table width="750px" style="border: 2px solid purple;font-size:12px; background-color: black;" align="center" class="table table-bordered" >
		<tr style="background:purple;color:white;height:30px;text-align:center;">
		<td><b>SL.</b></td>
		<td><b>Name</b></td>
		<td><b>Phone</b></td>
		<td><b>Blood Group</b></td>
		<td><b>Status</b></td>
		<td><b>Profile</b></td>
		</tr>
<?php
		//Print the contents
		$fl=0;
		$c=1;
		while($row = mysql_fetch_array($res))
		{   $fl=1;?>
			<tr style="text-align:center;height:25px;">
				<td><font style="color: white"><?php echo $c;?></font></td>
				<td><font style="color: white"><b><?php echo $row['full_name'];?></b></font></td>
				<td><font face="Times New Roman" size="2" style="color: white"><b> <?php echo $row['phone'];?></b></font></td>
				<td><font style="color:white"><b><?php echo $row['blood_group'];?></b></font></td>
				
				<?php  if($row['status']=="active"){?>
					<td> <button type="button" class="btn btn-success btn-xs"> ACTIVE </button> </td>
				<?php } else {?>
					<td> <button type="button" class="btn btn-danger btn-xs"> INACTIVE </button> </td>
					<?php } 
					
					
					
					if(isset($_REQUEST['paging'])){
					?>
					
						<td><a href="view.php?paging=<?php echo $_REQUEST['paging']; ?>&id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-primary btn-xs"> View </button> </a></td>
					<?php } else{ ?>
					<td><a href="view.php?id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-primary btn-xs"> View </button></a></td>
					<?php } ?>
			</tr>
			
		<?php
		$c++;	} //while
		?>

		</table>
				<?php if($fl==0){?>
		<h2>"No Donors Founded"</h2>
		<?php }?>
	
	</div>
			 
<?php include("include/footer.php");?>