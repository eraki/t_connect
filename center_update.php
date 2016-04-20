<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
form{background-color: #66ccff;}
</style>
<body>
</head>
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
	$sql = "SELECT * FROM center" ;
	
	$result = mysql_query($sql,$con) ;
	?>

 <?php
	while($row = mysql_fetch_array($result)){
	?>
<center><h1>المراكز</h1>

<fieldset style="width:55%">
<form method="get">
  <input type="hidden" name="c_id" value=" <?php echo "$row[c_id]"."   "?>" />

  <h3> الأسم </h3>
  <input type="text" name="c_name" value="<?php echo "$row[c_name]"?>"><br><br>
  
  <h3> العنوان بالكامل </h3>
    <input name="c_address" value="<?php echo "$row[c_address]"?>"/>
    <br>
    
    
    <h3> تاريخ الاشهار </h3> <input type="text" name="c_eshhar" value="<?php echo "$row[c_eshhar]"?>">
    <br>
    
    <h3> ضمن منظومة نوادى التكنولوجيا </h3>   
   <input name="c_type" value="<?php echo "$row[c_type]"?>">
   
   <h3>ما هى احتياجاتك من الدورات </h3><textarea name="c_courses" rows="5" cols="40"><?php echo "$row[c_courses]"?></textarea>
    <br>
  
    <h3>ما هى مجالات المركز</h3>
    <textarea name="c_experience" rows="5" cols="40"><?php echo "$row[c_experience]"?></textarea>
    <br>
    
    <h3>  رقم التليفون<h3><input type="text" name="c_phone" value="<?php echo "$row[c_phone]"?>"><br>
    
    <h3>الايميل</h3><input type="text" name="c_email" value="<?php echo "$row[c_email]"?>"><br>
    
  <h3>رابط الموقع</h3><input type="text" name="c_website" value="<?php echo "$row[c_website]"?>"><br> 
     
  
 <h3>عدد المدربين فى المركز</h3><input name="c_numtrainer" value="<?php echo "$row[c_numtrainer]"?>">
 
     
 <h3> بعض الصور للمكان </h3> <input type="text" name="c_erfak" value="<?php echo "$row[c_erfak]"?>" ><br>

<h3>اسم النادى التابع له</h3> <input type="text" name="c_nameclub" value="<?php echo "$row[c_nameclub]"?>"> <br>
     
<h3>المحافظة </h3><input type="text" name="c_city" value="<?php echo "$row[c_city]"?>"> <br>

<h3>المركز</h3> <input type="text" name="c_center" value="<?php echo "$row[c_center]"?>"> <br>

<h3>مسئول المعمل </h3><input type="text" name="c_namelmasaul" value="<?php echo "$row[c_namelmasaul]"?>"> <br>

<h3>تاريخ الانشاء</h3><input type="text" name="c_datecreate" value="<?php echo "$row[c_datecreate]"?>"> <br>

<h3> عدد المعامل</h3><input name="c_numlabs" value="<?php echo "$row[c_numlabs]"?>">
  
  </select> <br>
  
<h3> عدد اجهزة الحاسب الالى</h3> <input name="c_numdevices" value="<?php echo "$row[c_numdevices]"?>">

<h3>التجهيزات الفنية للمعمل</h3>
<input type="text" name="c_artsupplies" value="<?php echo "$row[c_artsupplies]"?>">


<h3>مواصفات اجهزة الحاسب الالى</h3>

<h4>نوع المعالج</h4><input type="text" name="c_processortype" value="<?php echo "$row[c_processortype]"?>">

<h4>سرعة  المعالج</h4><input type="text" name="c_prspeed" value="<?php echo "$row[c_prspeed]"?>"> 

<h4>حجم الرامات</h4> <input type="text" name="c_ramsize" value="<?php echo "$row[c_ramsize]"?>"> 

<h4>سرعة الانترنت</h4><input type="text" name="c_interspeed" value="<?php echo "$row[c_interspeed]"?>">
 <br>

<h4>الاوفيس</h4> <input type="text" name="c_office" value="<?php echo "$row[c_office]"?>">

<h4>نظام التشغيل </h4><input type="text" name="c_operatingsystem" value="<?php echo "$row[c_operatingsystem]"?>"> <br>
<input type="submit" value="update"> 

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




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	if (isset ($_GET['c_name'])&& isset ($_GET['c_address']) && isset ($_GET['c_eshhar']) && isset ($_GET['c_type']) && isset ($_GET['c_courses']) && isset ($_GET['c_experience']) && isset ($_GET['c_phone']) && isset ($_GET['c_email']) && isset ($_GET['c_website']) && isset ($_GET['c_numtrainer']) && isset ($_GET['c_erfak']) && isset ($_GET['c_nameclub'])&& isset ($_GET['c_city']) && isset ($_GET['c_center']) && isset ($_GET['c_namelmasaul']) && isset ($_GET['c_datecreate']) && isset ($_GET['c_numlabs']) && isset ($_GET['c_numdevices']) && isset ($_GET['c_artsupplies']) && isset ($_GET['c_processortype']) && isset ($_GET['c_prspeed']) && isset ($_GET['c_ramsize']) && isset ($_GET['c_interspeed']) && isset ($_GET['c_office']) && isset ($_GET['c_operatingsystem'])) 
	{
	
	$sql = "UPDATE center SET  c_name= '$_GET[c_name]',c_address='$_GET[c_address]',c_eshhar='$_GET[c_eshhar]',c_type='$_GET[c_type]',c_courses='$_GET[c_courses]',c_experience='$_GET[c_experience]',c_phone='$_GET[c_phone]',c_email='$_GET[c_email]',c_website='$_GET[c_website]',c_numtrainer='$_GET[c_numtrainer]',c_erfak='$_GET[c_erfak]',c_nameclub='$_GET[c_nameclub]',c_city='$_GET[c_city]',c_center='$_GET[c_center]',c_namelmasaul='$_GET[c_namelmasaul]',c_datecreate='$_GET[c_datecreate]',c_numlabs='$_GET[c_numlabs]',c_numdevices='$_GET[c_numdevices]',c_artsupplies='$_GET[c_artsupplies]',c_processortype='$_GET[c_processortype]',c_prspeed='$_GET[c_prspeed]',c_ramsize='$_GET[c_ramsize]',c_interspeed='$_GET[c_interspeed]',c_office='$_GET[c_office]',c_operatingsystem='$_GET[c_operatingsystem]'  WHERE  c_id= '$_GET[c_id]'" ;
	
	
	}
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);

?>

</body>
</html>