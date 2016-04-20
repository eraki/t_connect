<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form  method="post" action="login.php">
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
if (isset($_POST['u_name'])){$user_namee= $_POST['u_name'];}
if (isset($_POST['u_password'])){$user_passs = $_POST['u_password'];}
if (isset($_POST['submit']))
{
if($_POST['submit']){
if($user_namee!=''|| $user_passs!=''){
$sql = mysql_query("SELECT * FROM log_user WHERE u_name='$user_namee'");
WHILE($row = mysql_fetch_assoc($sql)){
	$user_name=$row['u_name'];
	$user_pass=$row['u_password'];
		$user_id=$row['u_id'];
	if($user_passs == $user_pass){
		echo"you have loged in";
		
		session_start();
		$_SESSION['username']=$user_name;
		$_SESSION['userid']=$user_id;
		//header("location:loginn.php");
		}
		else {echo"wrong password";}
		}
	}
	else{ echo"please put your daata";}		
}}
?>
</body>
</html>