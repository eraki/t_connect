<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ar">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>trainer</title>
    
<style>
.error {color: #FF0000;}
form{background-color: #66ccff;}
</style>
</head>

<body>

<center><h1>المدرب</h1>

<fieldset style="width:55%">
<form method="post" >
 
 <h3> :الاسم بالكامل</h3>
  <input type="text" name="tname" >
  
  </br>
  <h3>:العنوان بالكامل</h3>
  <input type="text" name="tadress"  >
  <br>
  <h3>:التيلفون</h3>
  <input type="unmber" name="tphone"  >
  <br>
  
  
  <h3>:الايميل</h3>
  <input type="email" name="temail"  >
  <br>
  
  <h3> :النوع</h3><br>
  <input type="radio" name="tgender" value="male" checked>انثي 
  <input type="radio" name="tgender" value="female">ذكر<br>
  <br>
  
  <h3>:المؤهل</h3>
  <textarea rows="4" cols="50" name="tmohal"></textarea>
  <br>
  <h3>:ماهى الجهة التابع لها</h3>
  <textarea rows="4" cols="50" name="twork"></textarea><br>
  <h3>:cvالرجاء ارفاق </h3>
  <input type="file" name="tcv"/>
 
  <center><input type="submit" name="submit" value="ارسال" />
  
</form>
</fieldset>
</center>
<?php 
$HostName="localhost";
$db_name="t_connect";
$LoginName="root";
$LoginPassword="";


$con= mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf-8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['tname']) && isset($_POST['tadress']) && isset($_POST['tphone'])&& isset($_POST['temail'])&& isset($_POST['tgender'])&& isset($_POST['tmohal'])&& isset($_POST['twork'])&& isset($_POST['tcv'])) 
{
$sql = "INSERT INTO trainer
(t_name,t_address,t_phone,t_email,t_gender,t_moahl,t_work,t_cv) VALUES ('$_POST[tname]','$_POST[tadress]','$_POST[tphone]','$_POST[temail]','$_POST[tgender]','$_POST[tmohal]','$_POST[twork]','$_POST[tcv]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>


</body>
</html>