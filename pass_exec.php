
		<?php 
		
		//Include database connection details
    require_once('include/config.php');
	
	
	function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
    }
	
	$username = clean($_POST['username']);
	
		
	$qry="SELECT * FROM user WHERE user_name='$username'";
    $result=mysql_query($qry);
     
    //Check whether the query was successful or not
    if($result) {
    if(mysql_num_rows($result) > 0) {
    //Login Successful
    session_regenerate_id();
    $member = mysql_fetch_assoc($result);
    $_SESSION['SESS_MEMBER_ID'] = $member['id'];
    $_SESSION['SESS_FIRST_NAME'] = $member['user_name'];
    $_SESSION['SESS_LAST_NAME'] = $member['password'];
    
	//echo "Username: " . $member['user_name'] . "<br/> Password: " . $member['password'];
	//echo '<script type="text/javascript"> alert(\'Hi\'); </script>
	$output="Username: " . $member['user_name'] . " | Password: " . $member['password'];
	echo '<script type="text/javascript">alert("'.$output.'")</script>';
	session_write_close();
	 //header("location: login.php");
	 header('Refresh: 0; login.php');
	}
	
	else
	{
		//echo "you are not registered";
		echo '<script type="text/javascript"> alert(\'You are not registered. Please Complete Registration first\'); </script>';
		header('Refresh: 0; apply.php');
	}
	
	
	}
		
		?>