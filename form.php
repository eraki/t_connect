<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body {
    background-color: gray;
	text-align: right;
	
}
</style>
<title>Untitled Document</title>
</head>
<body>
<center><h1>انشاء حساب</h1></center>
<form action="loginn.php" method="post">
<h3> :اسم المستخدم</h3>
 <input type="text" name="u_name" value="">
<br/><br/>
<h3>:الرقم السري</h3>
 <input type="password" name="u_password" value=""><br/><br/>
<a href="register_login.php"> انشاء حساب</a>
<input type="submit" value="تسجيل الدخول" name="submit">
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
if (isset($_POST['u_name'])){$u_user = $_POST['u_name'];}
if (isset($_POST['u_password'])){$u_pass = $_POST['u_password'];}
if (isset($_POST['submit']))
{
if($_POST['submit']){
if($s_user!=''|| $s_pass!=''){
$sql = mysql_query("SELECT * FROM log_user WHERE u_name ='$u_user'");
WHILE($row = mysql_fetch_assoc($sql)){
	$user_name=$row['u_name'];
	$user_pass=$row['u_password'];
		$user_id=$row['u_id'];
	if($user_name== $user_pass){
		echo"you have loged in";
		
		session_start();
		$_SESSION['u_name']=$user_name;
		$_SESSION['u_id']=$user_id;
		header("location:loginn.php");
		}
		else {echo"wrong password";}
		}
	}
	else{ echo"please put your daata";}		
}}
?>


</form>
</body>
</html>