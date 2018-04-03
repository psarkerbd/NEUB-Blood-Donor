<?php //include("include/config.php");?>
<?php include("include/a_header.php");?> 

			  <a href="a_index.php"><li>  Home </li> </a>
			  <a href="a_donor.php"><li class='active'>  Donors  </li></a>
			  <a href="a_admin.php"><li> Add Admin </li> </a>
			  <a href="a_gallery.php"><li> Gallery  </li> </a>
			  <a href="a_rules.php"><li> Rules  </li> </a>
			  <a href="index.php"><li>  LogOut   </li></a>
			
			</ul>
		  
		</div>
		
		
	    <div id="body">
	
	<div style="height:500px;width:700px;border:1px solid black;overflow-y:scroll;margin:0 auto;margin-top:50px;padding:10px;">
	
	
	<?php 
		if(isset($_REQUEST['delete']))
		{
			$sql="delete from user where nid='$_REQUEST[nid]' ";
			mysql_query($sql);
			echo 'User successfully deleted!!';
		
		}
		$sql="select * from user order by full_name asc ";
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
		$c=1;
		while($arr=mysql_fetch_array($res))
		{
			//echo $arr['full_name'];
			//echo '</br>';
			?>
			<tr style="text-align:center;height:25px;">
			
			  <td><?php echo $c;?></td>
		
		      <td><?php echo $arr['full_name'];?></td>
			  
			   <td><?php echo $arr['phone'];?></td>
			    <td><?php echo $arr['blood_group'];?></td>
			   
			   
			   <?php
					if(isset($_REQUEST['enter'])){
				
					?>
					<td><a href="a_view.php?enter=<?php echo $_REQUEST['enter']; ?>&nid=<?php echo $row['nid']; ?>"><button style="border-radius:20px;width:50px;background:white;color:blue;border:2px solid brown;">View</button></a></td>
					
					<?php } else{ ?>
					<td><a href="a_view.php?nid=<?php echo $arr['nid']; ?>"><button style="border-radius:20px;width:50px;background:white;color:blue;border:2px solid brown;">View</button></a></td>
					<?php } ?>
			  
			</tr>
	
	
	
	
	<?php
		$c++;}
		
	?>
	
	
	</table>
	
			 
<?php include("include/footer.php");?>