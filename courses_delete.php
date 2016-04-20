<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
form{background-color: #66ccff;}
</style>
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
	$sql = "SELECT * FROM courses" ;
	
	$result = mysql_query($sql,$con) ;
	?>

 <?php
	while($row = mysql_fetch_array($result)){
	?>
    
    <center><h1>الدورات</h1>

<fieldset style="width:55%">
<form method="get">
  <input type="hidden" name="co_id" value=" <?php echo "$row[co_id]"."   "?>" />
  
  <h3> اسم التدريب </h3>
  <input type="text" name="co_name" value="<?php echo "$row[co_name]"?>"><br><br>
  
  
  <h3> الجهة المانحة </h3>
  <input type="text" name="co_company" value="<?php echo "$row[co_company]"?>">
 <br><br>
 
<input type="submit" value="delete">

</form>
</fieldset>

<hr>
</center>

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
	
	$cb_id= $_GET['co_id'] ;
	if ( isset($_GET['co_id'])) {
	$sql = "DELETE FROM courses WHERE co_id ='$cb_id'" ;}
	
	mysql_query($sql,$con);
	
  mysql_close($con);
  
?>

</body>
</html>