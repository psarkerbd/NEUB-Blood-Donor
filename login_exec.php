    <?php  include("include/header.php");?>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/bootstrap.min.js"></script>

		<a href="index.php"><li>  Home </li> </a>
			  <a href="donor.php"><li>  Donors  </li></a>
			  <a href="apply.php"><li> Apply </li> </a>
			  <a href="gallery.php"><li> Gallery  </li> </a>
			  <a href="rules.php"><li> Rules  </li> </a>
			  <a href="login.php"><li class='active'>  Login   </li></a>
			</ul>
		  
		</div>
	

	
	
	<?php
    //Start session
    //session_start();
     
    //Include database connection details
    require_once('include/config.php');
     
    //Array to store validation errors
    $errmsg_arr = array();
     
    //Validation error flag
    $errflag = false;
     
    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
    }
     
    //Sanitize the POST values
    $username = clean($_POST['username']);
    $password = clean($_POST['password']);
     
    //Input Validations
    if($username == '') {

    $errflag = true;
	$errmsg_arr[] = 'phpAlert(   "Hello world!\\n\\nPHP has got an Alert Box"   )';
    }
	
    if($password == '') {
	$errflag = true;
	$errmsg_arr[] = ' phpAlert(   "Hello world!\\n\\nPHP has got an Alert Box"   ); ';
	
	} ?>
	
	
    <?php //$errmsg_arr[] = '</br><font color="red" style="margin-left:100px;"><b> Password missing </b></font>';
    //$errflag = true;
    //}
     
    //If there are input validations, redirect back to the login form
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr; ?>
	
   <script>
function myFunction() {
    alert("<?php session_write_close() ; ?>");
}
</script>

    <?php header("location: login.php");
    exit();
    }
     
    //Create query
    $qry="SELECT * FROM user WHERE user_name='$username' AND password='$password'";
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
    session_write_close();
    //header("location: u_index.php");
	//$arr=mysql_fetch_array($result);
	//$full_name = "SELECT full_name FROM user WHERE user_name='$username' AND password='$password'";
	
	 ?> 
	
	<div class="alert alert-success" style="border: 1px solid grey; margin: 100px 0px 0px 0px">
    <font style="font-size: 18px;"><?php echo "Welcome " . $_SESSION['SESS_FIRST_NAME']. " !<br />You have Successfully Logged in" ?> </font> </div>
	
	<?php header('Refresh: 1; u_index.php');
    exit();
    }else {
    //Login failed
    $errmsg_arr[] = '<div class="alert alert-danger">
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>';
    $errflag = true;
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr; ?>
	
    <?php session_write_close();
	echo '<script type="text/javascript"> alert(\'You are not registered. Please Complete Registration first\'); </script>';
		header('Refresh: 0; apply.php');
    //header("location: login.php");
    exit();
    }
    }
    }else {
    die("Query failed");
    }
    ?>
	
	<?php include("include/footer.php");?>