<?php //include("include/config.php");?>
<?php include("include/a_header.php");?>
		<a href="a_index.php"><li>  Home </li> </a>
			  <a href="a_donor.php"><li>  Donors  </li></a>
			  <a href="a_admin.php"><li class='active'> Add Admin </li> </a>
			  <a href="a_gallery.php"><li> Gallery  </li> </a>
			  <a href="a_rules.php"><li> Rules  </li> </a>
			  <a href="index.php"><li>  LogOut   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	

		
		<h2 style="margin-top:50px;color:#66ccff; text-align:center;"> Add Admin </h2> 
		
		<?php
		
		
		$nid  = $user_name = $password = "";
		$nidErr = $user_nameErr = $passwordErr = "";
		$nidErr1 = $user_nameErr1 = $passwordErr1 = "";
		
		$a=0;
		
		if(isset($_REQUEST['enter']))
		{
		
		     if( trim($_REQUEST['nid'])=="" )
				{
					$a=$a-1;
					$nidErr = "NID is required";
					
				}
				 else 
				{
					$a=$a+1;
					$nid = test_input($_REQUEST['nid']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[0-9]*$/",$nid)) {
					$a=$a-1;
					$nidErr1 = "Only numeric value allowed";
				
				}
				}
				
				if( trim($_REQUEST['user_name'])=="" )
				{
					$a=$a-1;
					$user_nameErr = "User Name is required";
				}
				 else 
				{
					$a=$a+1;
					$user_name = test_input($_REQUEST['user_name']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z0-9 ]*$/",$user_name)) {
					$a=$a-1;
					$user_nameErr1 = "Only letters,numeric value and white space allowed";
				}
				}
				
				
				if( trim($_REQUEST['password'])=="" )
				{
					$a=$a-1;
					$passwordErr = "Password is required";
				}
				 else 
				{
					$a=$a+1;
					$password = test_input($_REQUEST['password']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z0-9 ]*$/",$password)) {
					$a=$a-1;
					$passwordErr1 = "Only letters,numeric and white space allowed";
				}
				}
				
				
				
				
				if($a==3){
				$sql="INSERT INTO admin (nid , user_name, password) VALUES (trim('$_POST[nid]'),trim('$_POST[user_name]'),trim('$_POST[password]'))";
		        $msg='<font color="red">welcome,  password is: '.trim($_REQUEST['password']).',username is:'.trim($_REQUEST['user_name']).'</font>';
				echo $msg;
		    
			if (!mysql_query($sql,$con))
					{
						die('Error: ' . mysql_error());
					}
					
					
					}
		}
		
		
		
		
		
		
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
		
		?>
		
		<center> <form action="a_admin.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
		<table>
			<tr>
				<td>ID</td>
				<td>: <input type="text" name="nid"/>
			    <span style="color:#66ccff"><?php echo $nidErr;?></span>
				<span style="color:red"><?php echo $nidErr1; ?></span>
			</tr>
			
			<tr>
				<td>Username</td>
				<td>: <input type="text" name="user_name"/>
				<span style="color:#66ccff"><?php echo $user_nameErr ?></span>
				<span style="color:red"><?php echo $user_nameErr1 ?></span>
			</tr>
			<tr>
				<td>Password</td>
				<td>: <input type="text" name="password"/>
				<span style="color:#66ccff"><?php echo $passwordErr ?></span>
				<span style="color:red"><?php echo $passwordErr1 ?></span>
			</tr>
			
				<td></td>
				<td style="text-align:right;"><input type="submit" name="enter" value="Enter" style="border-radius:20px;background:gray;border:2px solid blue;color:white;width:60px;"></td>
			</tr>
		</table>
		</form>	</center>
		
		
		
		
		
		<?php include("include/footer.php");?>