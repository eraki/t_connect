<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="t_connect";
$LoginName="root";
$LoginPassword="";   
?>

<?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf-8';");
	$sql = "SELECT * FROM log_user" ;
	
	$result = mysql_query($sql,$con) ;
	?>

 <?php
	while($row = mysql_fetch_array($result)){
	?>
    
<form  method="get">
<input type="hidden" name="uid" value=" <?php echo "$row[u_id]"."   "?>">
<h3>:اسم المستخدم</h3>
 <input type="text" name="Name" value="<?php echo "$row[u_name]"."   "?>"><br/><br/>
<h3>:الرقم السرى<h3>
 <input type="text" name="password" value="<?php echo "$row[u_password]"."   "?>"><br><br>
<h3> :الفئة</h3><br> 
  <input type="text" name="elfaa" value="<?php echo "$row[u_elfeaa]"."   "?>" ><br/>
  
  
  <center><input type="submit" value="delete"></center>
</form>
 <?php
	;}
	 mysql_close($con);
	?>
    
    <?php
$HostName="localhost";
$db_name="t_connect";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  	mysql_select_db($db_name , $con);
	
	mysql_select_db($db_name , $con);
	
	$us_id= $_GET['uid'] ;
	if ( isset($_GET['uid'])) {
	$sql = "DELETE FROM log_user WHERE u_id ='$us_id'" ;}
	
	mysql_query($sql,$con);
	
  mysql_close($con);
  
?>
</body>
</html>