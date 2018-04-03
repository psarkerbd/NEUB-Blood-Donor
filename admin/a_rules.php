<?php //include("include/config.php");?>
<?php include("include/a_header.php");?>
	 <a href="a_index.php"><li>  Home </li> </a>
			  <a href="a_donor.php"><li>  Donors  </li></a>
			  <a href="a_admin.php"><li> Add Admin </li> </a>
			  <a href="a_gallery.php"><li> Gallery  </li> </a>
			  <a href="a_rules.php"><li class='active'> Rules  </li> </a>
			<a href="index.php"><li>  LogOut   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
		
		<?php
		
		
		if(isset($_REQUEST['enter'])){
		
		     
		//echo $image_name;
		$msg=trim($_REQUEST['rules_and_regulation']);
		
		$sql="update rules set
		rules_and_regulation='$msg'	
		where id=1";
		mysql_query($sql);
		$arr='<font color="green"><b> Profile updated. </b></font>';
		echo $arr;
	
								}
								
				
	









        $sql="select * from rules where id=1 ";
		$res=mysql_query($sql);
		$arr=mysql_fetch_array($res);
				
			
	?>
		<center> <form action="a_rules.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
		<table>
		
				<tr>
				
				
				<tr>
				<td valign="top">Message</td><td valign="top">: <textarea name="rules_and_regulation"  style="width:500px; height:500px;"><?php echo $arr['rules_and_regulation']; ?></textarea></td>
			    </tr>
			</tr>
		
		
			
			
			<tr>
				<td></td>
				<td style="text-align:right;"><input type="submit" name="enter" value="Enter" style="border-radius:20px;background:gray;border:2px solid blue;color:white;width:60px;"></td>
			</tr>
			
			
			
		</table>
		</form>	</center>
		
		
		
		
		
			 
<?php include("include/footer.php");?>
		