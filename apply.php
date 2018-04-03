<?php// include("include/config.php");?>
<?php include("include/header.php");?>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
		
		<a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="apply.php"><li class='active'> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li>  Login   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	

		 <h2 style="margin-top:60px;color:#66ccff; text-align:center;"> Application Form </h2> 
		
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
				$s="select * from user order by nid asc ";
				$r=mysql_query($s);
				while($a=mysql_fetch_array($r))
				{
					if(trim($_REQUEST['user_name'])==$a['user_name'] || trim($_REQUEST['email'])==$a['email'] || trim($_REQUEST['phone'])==$a['phone'])
						$fl=1;
				}
				if($fl==0)
				{
		function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
        {


                if($file['tmp_name'][$i]=="")
                {
						
						
						return "Uploading error in image";
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
								
								
								$sql="INSERT INTO user (nid , photo , full_name, user_name, password,father_name,  mother_name, email, phone, dob, gender,blood_group , village , post_office, thana, zilla, division, status)
						VALUES
						(trim('$_POST[nid]'),'$image_name' ,trim('$_POST[full_name]'),trim('$_POST[user_name]'),trim('$_POST[password]'),trim('$_POST[father_name]'),trim('$_POST[mother_name]'),trim('$_POST[email]'),trim('$_POST[phone]'),trim('$_POST[dob]'),trim('$_POST[gender]'),trim('$_POST[blood_group]'),trim('$_POST[village]'),trim('$_POST[post_office]') ,trim('$_POST[thana]'),trim('$_POST[zilla]'),trim('$_POST[division]'),'active')";
					if (!mysql_query($sql,$con))
					{
						die('Error: ' . mysql_error());
					}
							$msg='<font color="green"; align="center">You are welcome ';if($_REQUEST['gender']=="male"){ $msg2='Mr. '.trim($_REQUEST['full_name']).'</font></br><font color="purple">Your password is: <font ="blue">'.trim($_REQUEST['password']).'</font>, username is: <font color="blue">'.trim($_REQUEST['user_name']).'</font></font>';}  
							else { $msg2='Mrs. '.trim($_REQUEST['full_name']).'</font></br><font color="purple">Your password is: <font color="blue">'.trim($_REQUEST['password']).'</font>, username is: <font color="blue">'.trim($_REQUEST['user_name']).'</font></font>';}	
								echo $msg.$msg2;
			}	
			else
			{
				$msg='<font color="red">Username or email already in use.</font>';
				echo $msg;
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
		
		
		
		<center> <form action="apply.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
		<table>
			<tr>
				<td>NID</td>
				<td>: <input type="text" name="nid"/>
			    <span style="color:#66ccff"><?php echo $nidErr;?></span>
				<span style="color:red"><?php echo $nidErr1; ?></span>
			</tr>
			
			
			<tr>
				<td>Name</td>
				<td>: <input type="text" name="full_name"/>
				<span style="color:#66ccff"><?php echo $full_nameErr ?></span>
				<span style="color:red"><?php echo $full_nameErr1 ?></span>
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
			<tr>
				<td>Father Name</td>
				<td>: <input type="text" name="father_name"/>
				<span style="color:#66ccff"><?php echo $father_nameErr ?></span>
				<span style="color:red"><?php echo $father_nameErr1 ?></span>
			</tr>
			<tr>
				<td>Mother Name</td>
				<td>: <input type="text" name="mother_name"/>
				<span style="color:#66ccff"><?php echo $mothernameErr ?></span>
				<span style="color:red"><?php echo $mothernameErr1 ?></span>
			</tr>
			
			<tr>
				<td>Email</td>
				<td>: <input type="text" name="email"/>
				<span style="color:#66ccff"><?php echo  $emailErr ?></span>
				<span style="color:red"><span style="color:red"><?php echo  $emailErr1 ?></span>
			</tr>
			
			<tr>
				<td>Mobile No.</td>
				<td>: <input type="text" name="phone"/>
				<span style="color:#66ccff"><?php echo $phoneErr ?></span>
				
			</tr>
			
			<tr>
				<td>Birth of Date</td>
				<td>: <input type="text" name="dob"/>
				<span style="color:#66ccff"><?php echo $dobErr ?></span>
				
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>: <select name="gender">
						<option value="">-select-</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					<select><span style="color:#66ccff"><?php echo  $genderErr ?></span></td>
			</tr>
			
			<tr>
				<td>Blood Group</td>
				<td>: <select name="blood_group">
								<option value="">-select-</option>
								<option value="A+">A(+ve)</option>
								<option value="A-">A(-ve)</option>
								<option value="B+">B(+ve)</option>
								<option value="B-">B(-ve)</option>
								<option value="O+">O(+ve)</option>
								<option value="O-">O(-ve)</option>
								<option value="AB+">AB(+ve)</option>
								<option value="AB-">AB(-ve)</option>
							</select><span style="color:#66ccff"><?php echo $bloodgroupErr  ?></span></td>
			</tr>
			
			<tr>
				<td>Village</td>
				<td>: <input type="text" name="village"/>
				<span style="color:#66ccff"><?php echo $villageErr ?></span>
				<span style="color:red"><?php echo $villageErr1 ?></span>
			</tr>
			
			<tr>
				<td>Post Office</td>
				<td>: <input type="text" name="post_office"/>
				<span style="color:#66ccff"><?php echo $postofficeErr ?></span>
				<span style="color:red"><?php echo $postofficeErr1 ?></span>
			</tr>
			
			<tr>
				<td>Thana</td>
				<td>: <input type="text" name="thana"/>
				<span style="color:#66ccff"><?php echo $thanaErr ?></span>
				<span style="color:red"><?php echo $thanaErr1 ?></span>
			</tr>
			
			<tr>
				<td>Zilla</td>
				<td>: <input type="text" name="zilla"/>
				<span style="color:#66ccff"><?php echo $zillaErr ?></span>
				<span style="color:red"><?php echo $zillaErr1 ?></span>
			</tr>
			
			<tr>
				<td>Division</td>
				<td>: <select name="division">
						<option value="">-select-</option>
						
						<option value="dhaka">Dhaka</option>
						<option value="chittagong">Chittagong</option>
						<option value="khulna">Khulna</option>
						<option value="barisal">Barisal</option>
						<option value="rajshahi">Rajshahi</option>
						<option value="sylhet">Sylhet</option>
					<select><span style="color:#66ccff"><?php echo $divisionErr ?></span></td>
			</tr>
			
			<tr>
				<td>Upload Image</td>
				<td>: <input type="file" name="photo[0]"></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align:right;"><input type="submit" name="enter" value="Enter" style="border-radius:20px;background:gray;border:2px solid blue;color:white;width:60px;"></td>
			</tr>
		</table>
		</form>	</center>
		
<?php include("include/footer.php");?>
