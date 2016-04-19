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
	$sql = "SELECT * FROM trainer" ;
	
	$result = mysql_query($sql,$con) ;
	?>

 <?php
	while($row = mysql_fetch_array($result)){
	?>

<center><h1>المدرب</h1>
    <fieldset style="width:55%">
    <form method="get">
    <input type="hidden" name="tid" value=" <?php echo "$row[t_id]"."   "?>" />

 <h3> :الاسم بالكامل</h3>
  <input type="text" name="tname" value="<?php echo "$row[t_name]"?>" ><br><br />
  <h3>:العنوان بالكامل</h3>
  <input type="text" name="tadress" value="<?php echo "$row[t_address]"?>" ><br><br />
  <h3>:التيلفون</h3>
  <input type="unmber" name="tphone" value="<?php echo "$row[t_phone]"?>" ><br><br />
  <h3>:الايميل</h3>
  <input type="email" name="temail" value="<?php echo "$row[t_email]"?>" ><br><br />
  
  <h3> :النوع</h3><br>
  <input type="text" name="tgender" value="<?php echo "$row[t_gender]"?>" ><br /><br />
  
  <h3>:المؤهل</h3>
  <textarea rows="4" cols="50" name="tmohal"><?php echo "$row[t_moahl]"?></textarea><br><br>
  <h3>:ماهى الجهة التابع لها</h3>
  <textarea rows="4" cols="50" name="twork"><?php echo "$row[t_work]"?></textarea><br><br>
  <h3>:cv </h3>
  <input type="text" name="tcv" value="<?php echo "$row[t_cv]"?>"/><br /><br /> 
  <input type="submit" value="delete"> 
</form>
</fieldset>
<hr>
 
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
	
	$tm_id= $_GET['tid'] ;
	if ( isset($_GET['tid'])) {
	$sql = "DELETE FROM trainer WHERE t_id ='$tm_id'" ;}
	
	mysql_query($sql,$con);
	
  mysql_close($con);
  
?>
</body>
</html>