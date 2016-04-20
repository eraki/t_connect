<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body {
	background-image: url("conn.png");
	background-repeat: no-repeat width="100%" hieght="100%";
	text-align: left;
	 form{background-color: #66ccff;}

</style>
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
	$sql = "SELECT * FROM center" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <center><h1>المراكز</h1>

<fieldset style="width:55%">
<form method="post">
  
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
  
    <h3>ما هى مجالات المركز </h3>
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


</form>
</fieldset>
<a href="center_update.php" >update</a>
 <a href="center_delete.php">delete</a>

<hr>
</center>

<?php
	;}
	 mysql_close($con);
	?>


</body>
</html>