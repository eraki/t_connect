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
<center><h1>الدورات</h1>

<fieldset style="width:55%">
<form method="post">

  <h3> اسم التدريب </h3>
  <input type="text" name="co_name">
  <br>
  
  <h3> اسم الشركة  </h3>
  <input type="text" name="co_company">
   <br><br><br>
   
   <center> <input type="submit"> </center>

</form>
</fieldset>

</center>
 
 <?php 
$HostName="localhost";
$db_name="t_connect";
$LoginName="root";
$LoginPassword="";

$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['co_name']) && isset($_POST['co_company'])){ 
	
$sql = "INSERT INTO courses
(co_name,co_company)    VALUES ('$_POST[co_name]','$_POST[co_company]')" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>

</body>
</html>