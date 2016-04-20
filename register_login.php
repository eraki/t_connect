<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<meta charset="utf-8">
<style>
body {
    background-image: url("conn.png");
	text-align: right;
}
</style>
</head>
<body>

<center><h1>التسجيل</h1></center>

<form  method="post">
<h3>:اسم المستخدم</h3>
 <input type="text" name="Name" value=""><br><br>
<h3>:الرقم السرى<h3>
 <input type="password" name="password" value=""><br><br>
<h3> :الفئة</h3><br> 
  <input type="radio" name="elfaa" value="مدرب" > مدرب<br>
  <input type="radio" name="elfaa" value="جمعية"> جمعية<br><br>
  
  <center><input type="submit" value="ارسال"></center>
</form>
<?php 
$HostName="localhost";
$db_name="t_connect";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['Name']) && isset($_POST['password']) && isset($_POST['elfaa'])) {
$sql = "INSERT INTO log_user
(u_name,u_password,	u_elfeaa) VALUES ('$_POST[Name]' ,'$_POST[password]' , '$_POST[elfaa]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>
