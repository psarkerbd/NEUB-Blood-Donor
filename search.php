<?php //include("include/config.php");?>

<?php include("include/header.php");?>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

             <a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="registration.php" target="_blank"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>


<div id="body">

<h2 style="margin-top:50px;color:#0000ff; text-align:center;">Searched Donor List</h2>
<div style="height:500px;width:700px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">

<?php 
		$sql="select * from user where blood_group='$_REQUEST[blood_group]' and status='active'  ";
		$res=mysql_query($sql);
	?>	
		<table width="690px" style="border: 2px solid purple;font-size:12px;" align="center" >
		<tr style="background:purple;color:white;height:30px;text-align:center;">
		<td><b>SL.</b></td>
		<td><b>Name</b></td>
		<td><b>Phone</b></td>
		<td><b>Blood Group</b></td>
		<td><b>Status</b></td>
		</tr>
		
		<?php
		$fl=0;
		?>
		<?php
		$c=1;
		while($arr=mysql_fetch_array($res))
		{
			//echo $arr['full_name'];
			//echo '</br>';
			 $fl=1;
			?>
			<tr style="text-align:center;height:25px;">
			
			  <td><?php echo $c;?></td>
		
		      <td><?php echo $arr['full_name'];?></td>
			  
			   <td><?php echo $arr['phone'];?></td>
			    <td><?php echo $arr['blood_group'];?></td>
			   <td><?php echo $arr['status'];?></td>
			  
			</tr>
	
	
	
	
	<?php
		$c++;}
		
	?>
	
	
	</table>

<?php if($fl==0){?>
		<h2 style="margin-top:50px;color:red; text-align:center;">"No Donors Founded"</h2>
		<?php }?>
</div>

<?php include("include/footer.php");?>