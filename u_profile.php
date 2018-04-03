<?php //include("include/config.php");?>
<?php include("include/u_header.php");?>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

		<a href="u_index.php"><li>  Home </li> </a>
			  <a href="u_donor.php"><li>  Donors  </li></a>
			  <a href="u_profile.php"><li class='active'> Edit Profile </li> </a>
			  <a href="u_gallery.php"><li> Gallery  </li> </a>
			  <a href="u_rules.php"><li> Rules  </li> </a>
			  <a href="logout.php"><li>  Logout   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	

		
		<h2 style="margin-top:50px;color:#66ccff; text-align:center;"> Edit Profile </h2> 
		
		<?php
			
			$nid = $full_name = $user_name = $password = "";
			$nidErr = $full_nameErr = $user_nameErr = $passwordErr = "";
			$nidErr1 = $full_nameErr1 = $user_nameErr1 = $passwordErr1 = "";
			
			$father_name = $mothername = $email = $phone = "";
		    $father_nameErr = $mothernameErr = $emailErr = $phoneErr = "";
			$father_nameErr1 = $mothernameErr1 = $emailErr1 = $phoneErr1 = "";
			
			$dob = $bloodgroup = $gender = "";
		    $dobErr = $bloodgroupErr = $genderErr = "";
			
			$village = $postoffice = $thana = $zilla = $division = "";
		    $villageErr = $postofficeErr = $thanaErr = $zillaErr = $divisionErr = "";
			$villageErr1 = $postofficeErr1 = $thanaErr1 = $zillaErr1 = $divisionErr1 = "";
			
			
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
				
				
				if( trim($_REQUEST['full_name'])=="" )
				{
					$a=$a-1;
					$full_nameErr = "Name is required";
				}
				 else 
				{
			        $a=$a+1;	
					$full_name = test_input($_REQUEST['full_name']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$full_name)) {
					$a=$a-1;
					$full_nameErr1 = "Only letters and white space allowed";
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
				
				
				if( trim($_REQUEST['father_name'])=="" )
				{
					$a=$a-1;
					$father_nameErr = "Father Name is required";
				}
				 else 
				{
					$a=$a+1;
					$father_name = test_input($_REQUEST['father_name']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$father_name)) {
					$a=$a-1;
					$father_nameErr1 = "Only letters and white space allowed";
				}
				}
				
				
				if( trim($_REQUEST['mother_name'])=="" )
				{
					$a=$a-1;
					$mothernameErr = "Mother Name is required";
				}
				 else 
				{
					$a=$a+1;
					$mothername = test_input($_REQUEST['mother_name']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$mothername)) {
					$a=$a-1;
					$mothernameErr1 = "Only letters and white space allowed";
				}
				}
				
				if( trim($_REQUEST['email'])=="" )
				{
					$a=$a-1;
					$emailErr = "Email is required";
				}
				else 
				{
                  $a=$a+1;
				  $email = test_input($_REQUEST['email']);
                 // check if e-mail address is well-formed
                 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $a=$a-1;
                 $emailErr1 = "Invalid email format";
               }
                }
				
				
				if( trim($_REQUEST['phone'])=="" )
				{
					$a=$a-1;
					$phoneErr = "Phone is required";
				}
				
				if( trim($_REQUEST['dob'])=="" )
				{
					$a=$a-1;
					$dobErr = "Date of Birth is required";
				}
				
				if( trim($_REQUEST['blood_group'])=="" )
				{
					$a=$a-1;
					$bloodgroupErr = "Blood Group is required";
				}
				
				if( trim($_REQUEST['gender'])=="" )
				{
					$a=$a-1;
					$genderErr = "Gender is required";
				}
				
				if( trim($_REQUEST['village'])=="" )
				{
					$a=$a-1;
					$villageErr = "Village is required";
				}
				 else 
				{
					$a=$a+1;
					$village = test_input($_REQUEST['village']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$village)) {
					$a=$a-1;
					$villageErr1 = "Only letters and white space allowed";
				}
				}
				
				if( trim($_REQUEST['post_office'])=="" )
				{
					$a=$a-1;
					$postofficeErr = "Post Office is required";
				}
				 else 
				{
					$a=$a+1;
					$postoffice = test_input($_REQUEST['post_office']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$postoffice)) {
					$a=$a-1;
					$postofficeErr1 = "Only letters and white space allowed";
				}
				}
				
				if( trim($_REQUEST['thana'])=="" )
				{
					$a=$a-1;
					$thanaErr = "Thana is required";
				}
				 else 
				{
					$a=$a+1;
					$thana = test_input($_REQUEST['thana']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$thana)) {
					$a=$a-1;
					$thanaErr1 = "Only letters and white space allowed";
				}
				}
				
				if( trim($_REQUEST['zilla'])=="" )
				{
					$a=$a-1;
					$zillaErr = "Zilla is required";
				}
				 else 
				{
					$a=$a+1;
					$zilla = test_input($_REQUEST['zilla']);
					// check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z ]*$/",$zilla)) {
					$a=$a-1;
					$zillaErr1 = "Only letters and white space allowed";
				}
				}
				
				if( trim($_REQUEST['division'])=="" )
				{
					$a=$a-1;
					$divisionErr = "Division is required";
				}
				
				
				
		  if($a==11)
			{
				$fl=0;
				$sql="select * from user where nid!='$id' ";
				$r=mysql_query($sql);
				while($a=mysql_fetch_array($r))
				{
					if(trim($_REQUEST['user_name'])==$a['user_name'] || trim($_REQUEST['email'])==$a['email'] || trim($_REQUEST['phone'])==$a['phone'])
						$fl=1;
				}
				
				
				
				if($fl==1)
				{
					$msg='<font color="red">This username or email already in use.</font>';
					echo $msg;
				
				}
				
				else
				{
				
				
						function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
        {


                if($file['tmp_name'][$i]=="")
                {
						$t_sql="select * from user where nid='$_REQUEST[nid]' ";			
						$t_re=mysql_query($t_sql);
						$t_arr=mysql_fetch_array($t_re);
						$ran=$t_arr['photo'];
						return $ran;
                }
                if($file['tmp_name'][$i]!="")
                {
                        $p=$file['name'][$i];
                        $pos=strrpos($p,".");
                        $ph=strtolower(substr($p,$pos+1,strlen($p)-$pos));
                        $im_size =  round($file['size'][$i]/1024,2);

                        if($im_size > $max_foto_size)
                           {
                                echo "Image is Too Large";
                                return;
                           }
                        $photo_extention = explode(",",$photo_extention);
                        if(!in_array($ph,$photo_extention ))
                           {
                                echo "Upload Correct Image";

                                return;
                           }
                }
                        $ran=date(time());
                        $c=$ran.rand(1,10000);
                        $ran.=$c.".".$ph;



                        if(isset($file['tmp_name'][$i]) && is_uploaded_file($file['tmp_name'][$i]))
                        {
                        $ff = $path."admin/images/".$folder_name."/".$ran;
                        move_uploaded_file($file['tmp_name'][$i], $ff );
                        chmod($ff, 0777);
                        }
               return  $ran;
        }
		$file=$_FILES['photo'];
		$image_name=photo_upload($file,0,100000,"jpg,gif,png",'users',$path='');
								
								
								
								$sql="update user set
								    nid=trim('$_REQUEST[nid]'),
									full_name=trim('$_REQUEST[full_name]'),
									father_name=trim('$_REQUEST[father_name]'),
									mother_name=trim('$_REQUEST[mother_name]'),
									gender=trim('$_REQUEST[gender]'),
									status=trim('$_REQUEST[status]'),
									blood_group=trim('$_REQUEST[blood_group]'),
									dob=trim('$_REQUEST[dob]'),
									post_office=trim('$_REQUEST[post_office]'),
									zilla=trim('$_REQUEST[zilla]'),
									thana=trim('$_REQUEST[thana]'),
									division=trim('$_REQUEST[division]'),
									photo='$image_name',
									email=trim('$_REQUEST[email]'),
									phone=trim('$_REQUEST[phone]'),
									user_name=trim('$_REQUEST[user_name]'),
									password=trim('$_REQUEST[password]')
									where nid='$id'";
									mysql_query($sql);
									$arr='<font color="green"><b> Profile updated. </b></font>';
									echo $arr;
								
								}
								}
				
	}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	








        $sql="select * from user where nid='$id' ";
		$res=mysql_query($sql);
		$arr=mysql_fetch_array($res);
				
			
	?>
		
		
			
			<center> <form action="u_profile.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
		<table>
		
				<tr>
				<td><img src="admin/images/users/<?php echo $arr['photo']; ?>" height="100" width="80" style="border:2px solid black;"></td>
				<td>: <input type="file" name="photo[0]"></td>
			</tr>
		
		
			<tr>
				<td>NID</td>
				<td>: <input type="text" name="nid"value="<?php echo $arr['nid']; ?>"/>
			    <span style="color:#66ccff"><?php echo $nidErr;?></span>
				<span style="color:red"><?php echo $nidErr1; ?></span>
			</tr>
			
			
			<tr>
				<td>Name</td>
				<td>: <input type="text" name="full_name"value="<?php echo $arr['full_name']; ?>"/>
				<span style="color:#66ccff"><?php echo $full_nameErr ?></span>
				<span style="color:red"><?php echo $full_nameErr1 ?></span>
			</tr>
			<tr>
				<td>Username</td>
				<td>: <input type="text" name="user_name"value="<?php echo $arr['user_name']; ?>"/>
				<span style="color:#66ccff"><?php echo $user_nameErr ?></span>
				<span style="color:red"><?php echo $user_nameErr1 ?></span>
			</tr>
			<tr>
				<td>Password</td>
				<td>: <input type="text" name="password"value="<?php echo $arr['password']; ?>"/>
				<span style="color:#66ccff"><?php echo $passwordErr ?></span>
				<span style="color:red"><?php echo $passwordErr1 ?></span>
			</tr>
			<tr>
				<td>Father Name</td>
				<td>: <input type="text" name="father_name"value="<?php echo $arr['father_name']; ?>"/>
				<span style="color:#66ccff"><?php echo $father_nameErr ?></span>
				<span style="color:red"><?php echo $father_nameErr1 ?></span>
			</tr>
			<tr>
				<td>Mother Name</td>
				<td>: <input type="text" name="mother_name"value="<?php echo $arr['mother_name']; ?>"/>
				<span style="color:#66ccff"><?php echo $mothernameErr ?></span>
				<span style="color:red"><?php echo $mothernameErr1 ?></span>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>: <input type="text" name="email"value="<?php echo $arr['email']; ?>"/>
				<span style="color:#66ccff"><?php echo  $emailErr ?></span>
				<span style="color:red"><span style="color:red"><?php echo  $emailErr1 ?></span>
			</tr>
			
			<tr>
				<td>Mobile No.</td>
				<td>: <input type="text" name="phone"value="<?php echo $arr['phone']; ?>"/>
				<span style="color:#66ccff"><?php echo $phoneErr ?></span>
				
			</tr>
			
			<tr>
				<td>Date of Birth</td>
				<td>: <input type="text" name="dob"value="<?php echo $arr['dob']; ?>"/>
				<span style="color:#66ccff"><?php echo $dobErr ?></span>
				
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>: <select name="gender">
						<option value="<?php echo $arr['gender']; ?>"><?php echo $arr['gender']; ?></option>
						<?php if($arr['gender']!="male"){ ?><option value="male">Male</option><?php } ?>
						<?php if($arr['gender']!="female"){ ?><option value="female">Female</option><?php } ?>
					<select></td>
			</tr>
			
			<tr>
				<td>Blood Group</td>
				<td>: <select name="blood_group">
								<option value="<?php echo $arr['blood_group']; ?>">
								<?php 
									if($arr['blood_group']=="A+"){ echo "A(+ve)"; }
									if($arr['blood_group']=="A-"){ echo "A(-ve)"; }
									if($arr['blood_group']=="B+"){ echo "B(+ve)"; }
									if($arr['blood_group']=="B-"){ echo "B(-ve)"; }
									if($arr['blood_group']=="O+"){ echo "O(+ve)"; }
									if($arr['blood_group']=="O-"){ echo "O(-ve)"; }
									if($arr['blood_group']=="AB+"){ echo "AB(+ve)"; }
									if($arr['blood_group']=="AB-"){ echo "AB(-ve)"; }
								?></option>
								<?php if($arr['blood_group']!="A+"){ ?> <option value="A+">A(+ve)</option><?php } ?>
								<?php if($arr['blood_group']!="A-"){ ?><option value="A-">A(-ve)</option><?php } ?>
								<?php if($arr['blood_group']!="B+"){ ?><option value="B+">B(+ve)</option><?php } ?>
								<?php if($arr['blood_group']!="B-"){ ?><option value="B-">B(-ve)</option><?php } ?>
								<?php if($arr['blood_group']!="o+"){ ?><option value="o+">O(+ve)</option><?php } ?>
								<?php if($arr['blood_group']!="o-"){ ?><option value="O-">O(-ve)</option><?php } ?>
								<?php if($arr['blood_group']!="AB+"){ ?><option value="AB+">AB(+ve)</option><?php } ?>
								<?php if($arr['blood_group']!="AB-"){ ?><option value="AB-">AB(-ve)</option><?php } ?>
							</select></td>
			</tr>
			
			<tr>
				<td>Village</td>
				<td>: <input type="text" name="village"value="<?php echo $arr['village']; ?>"/>
				<span style="color:#66ccff"><?php echo $villageErr ?></span>
				<span style="color:red"><?php echo $villageErr1 ?></span>
			</tr>
			
			<tr>
				<td>Post Office</td>
				<td>: <input type="text" name="post_office"value="<?php echo $arr['post_office']; ?>"/>
				<span style="color:#66ccff"><?php echo $postofficeErr ?></span>
				<span style="color:red"><?php echo $postofficeErr1 ?></span>
			</tr>
			
			<tr>
				<td>Thana</td>
				<td>: <input type="text" name="thana"value="<?php echo $arr['thana']; ?>"/>
				<span style="color:#66ccff"><?php echo $thanaErr ?></span>
				<span style="color:red"><?php echo $thanaErr1 ?></span>
			</tr>
			
			<tr>
				<td>Zilla</td>
				<td>: <input type="text" name="zilla"value="<?php echo $arr['zilla']; ?>"/>
				<span style="color:#66ccff"><?php echo $zillaErr ?></span>
				<span style="color:red"><?php echo $zillaErr1 ?></span>
			</tr>
			
			<tr>
				<td>Division</td>
				<td>: <select name="division">
						<option value="<?php echo $arr['division']; ?>"><?php echo $arr['division']; ?></option>
						
						
						<?php if($arr['division']!="dhaka"){ ?><option value="dhaka">Dhaka</option><?php } ?>
						<?php if($arr['division']!="chittagong"){ ?><option value="chittagong">Chittagong</option><?php } ?>
						<?php if($arr['division']!="khulna"){ ?><option value="khulna">Khulna</option><?php } ?>
						<?php if($arr['division']!="barisal"){ ?><option value="barisal">Barisal</option><?php } ?>
					    <?php if($arr['division']!="rajshahi"){ ?><<option value="rajshahi">Rajshahi</option><?php } ?>
			             <?php if($arr['division']!="sylhet"){ ?><option value="sylhet">Sylhet</option><?php } ?>
						<select><span style="color:#66ccff"><?php echo $divisionErr ?></span></td>
					
			</tr>
			
			
			<tr>
				<td style="color:red;">Status</td>
				<td>: <select name="status">
						<option value="<?php echo $arr['status']; ?>"><?php echo $arr['status']; ?></option>
						<?php if($arr['status']!="active"){ ?><option value="active">Active</option><?php } ?>
						<?php if($arr['status']!="inactive"){ ?><option value="inactive">Inactive</option><?php } ?>
						</select>
				</td>
			</tr>
			
		
			
			
			<tr>
				<td></td>
				<td style="text-align:right;"><input type="submit" name="enter" value="Enter" style="border-radius:20px;background:gray;border:2px solid blue;color:white;width:60px;"></td>
			</tr>
			
			
			
		</table>
		</form>	</center>
		
		
		
		
		
		
		<?php include("include/footer.php");?>