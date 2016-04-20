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
    <center><h1>التسجيل</h1></center>
<fieldset style="width:55%">
    <form method="get">
    <input type="hidden" name="u_id" value=" <?php echo "$row[u_id]"."   "?>" />

<h3>:اسم المستخدم</h3>
 <input type="text" name="Name" value="<?php echo "$row[u_name]"?>"><br><br>
<h3>:الرقم السرى<h3>
 <input type="text" name="password" value="<?php echo "$row[u_password]"?>"><br><br>
<h3> :الفئة</h3><br> 
  <input type="text" name="elfaa" value="<?php echo "$row[u_elfeaa]"?>"> 
  
  
  <center><input type="submit" value="update"></center>
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




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE log_user SET  u_name= '$_GET[Name]',u_password='$_GET[password]',u_elfeaa='$_GET[elfaa]' WHERE  u_id= '$_GET[u_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
</body>
</html>