    <?php
		//session_start();
	$db_host='localhost';
	$db_user='root';
	$db_password='';
	$db_name='neub_blood_donor';
	

	$con=mysql_connect($db_host,$db_user,$db_password) or die ('Cannot connect to the database.');
	$db=mysql_select_db($db_name);
	mysql_query('SET CHARACTER SET utf8');
	mysql_query("SET SESSION collation_connection ='utf8_general_ci'"); 
    ?>