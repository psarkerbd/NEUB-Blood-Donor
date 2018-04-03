<?php  include("include/header.php");?>
			 <a href="index.php"></a>
			</ul>
		  
		</div>
	    <div id="body">	
		
	<h1 style="margin-top:100px;color:red;">Admin Panel</h1>
						<form name="loginform" action="login_exec.php" method="post">
					<table width="309" border="0" align="center" cellpadding="2" cellspacing="5" style="margin-bottom:120px;">
					<tr>
					<td colspan="2">
					<!--the code bellow is used to display the message of the input validation-->
					<?php
					if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
					echo $msg;
					}
					echo '</ul>';
					unset($_SESSION['ERRMSG_ARR']);
					}
					?>
					</td>
					</tr>
					<tr>
					<td width="116"><div align="right" style="color:#003300" autocomplete="off" >Username: </div></td>
					<td width="177"><input name="username" type="text" autocomplete="off" placeholder="           username" style="width:140px;"/></td>
					</tr>
					<tr>
					<td><div align="right" style="color:#003300">Password: </div></td>
					<td><input name="password" type="password" placeholder="          password" style="width:140px;"/></td>
					</tr>
					<tr>
					<td><div align="right"></div></td>
					<td><input name="" type="submit" value="&nbsp&nbsp Sign in &nbsp&nbsp" style="background:#0066CC;color:white;margin-left:80px;border-radius:12px;"/></td>
					</tr>
					</table>
					</form>
		
		
<?php include("include/footer.php");?>