<?php //include("include/config.php");?>
<?php include("include/a_header.php");?>
              <a href="a_index.php"><li class='active'>  Home </li> </a>
			  <a href="a_donor.php"><li>  Donors  </li></a>
			  <a href="a_admin.php"><li> Add Admin </li> </a>
			  <a href="a_gallery.php"><li> Gallery  </li> </a>
			  <a href="a_rules.php"><li> Rules  </li> </a>
			  <a href="index.php"><li>  LogOut   </li></a>
			</ul>
		  
		</div>
	    <div id="body">	
		<h2 style="margin-top:100px;color:red;"> Change home message and picture </h2>
		
		<?php
		
		
		if(isset($_REQUEST['enter'])){
		
		     function photo_upload($file,$i,$max_foto_size,$photo_extention,$folder_name,$path='')
        {


                if($file['tmp_name'][$i]=="")
                {
						$t_sql="select * from home where id=1 ";			
						$t_re=mysql_query($t_sql);
						$t_arr=mysql_fetch_array($t_re);
						$ran=$t_arr['img'];
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
                        $ff = $path."images/".$folder_name."/".$ran;
                        move_uploaded_file($file['tmp_name'][$i], $ff );
                        chmod($ff, 0777);
                        }
               return  $ran;
        }
		$file=$_FILES['photo'];
		$image_name=photo_upload($file,0,100000,"jpg,gif,png",'news',$path='');
		
		//echo $image_name;
		$msg=trim($_REQUEST['message']);
		
		$sql="update home set
		message='$msg',
		img='$image_name'	
		where id=1";
		mysql_query($sql);
		$arr='<font color="green"><b> Profile updated. </b></font>';
		echo $arr;
	
								}
								
				
	









        $sql="select * from home  ";
		$res=mysql_query($sql);
		$arr=mysql_fetch_array($res);
				
			
	?>
		<center> <form action="a_index.php" method="post" ENCTYPE="MULTIPART/FORM-DATA">
		<table>
		
				<tr>
				<td><img src="images/news/<?php echo $arr['img']; ?>" height="100" width="80" style="border:2px solid black;"></td>
				<td>: <input type="file" name="photo[0]"></td>
				
				<tr>
				<td valign="top">Message</td><td valign="top">: <textarea name="message"  style="width:500px; height:500px;"><?php echo $arr['message']; ?></textarea></td>
			</tr>
			</tr>
		
		
			
			
			<tr>
				<td></td>
				<td style="text-align:right;"><input type="submit" name="enter" value="Enter" style="border-radius:20px;background:gray;border:2px solid blue;color:white;width:60px;"></td>
			</tr>
			
			
			
		</table>
		</form>	</center>
		
		
		
		
		
		
			 
<?php 
	include("include/footer.php"); 
?>
		