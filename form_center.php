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

<center><h1>المركز</h1>
<fieldset style="width:55%">
<form method="post">
  
  <h3> الأسم </h3>
  <input type="text" name="c_name">
  
  <h3> العنوان بالكامل </h3>
    <input type="text" name="c_address"><br><br> 
    
    <h3> تاريخ الاشهار </h3> <input type="text" name="c_eshhar">
    <br><br>
    
    <h3> ضمن منظومة نوادى التكنولوجيا </h3>   
   <h4> شريك </h4><input type="radio" name="c_type" value="شريك">
   <h4> ليس ضمن نوادى التكنولوجيا </h4> <input type="radio" name="c_type" value="ليس ضمن نوادى التكنولوجيا">
  <br><br>
  
   <h3>ما هى احتياجاتك من الدورات </h3><textarea name="c_courses" rows="5" cols="40"></textarea>
    <br><br>
  
    <h3>ما هى مجالات المركز</h3>
    <textarea name="c_experience" rows="5" cols="40"></textarea>
    <br><br>
  
    <h3>  رقم التليفون<h3>  <input type="text" name="c_phone"> <br><br>
    
    <h3>الايميل</h3> <input type="text" name="c_email"> <br><br>
    
  <h3>رابط الموقع</h3><input type="text" name="c_website"> <br><br> 
   
 <h3>عدد المدربين فى المركز</h3>  <select name="c_numtrainer">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select> <br><br>
     
 <h3>الرجاء ارفاق بعض الصور لمعاينة المكان </h3> <input type="file" name="c_erfak"> <br><br>
 
<h3>اسم النادى التابع له</h3> <input type="text" name="c_nameclub"> <br><br>
     
<h3>المحافظة </h3><input type="text" name="c_city"> <br><br>

<h3>المركز</h3> <input type="text" name="c_center"> <br><br>

<h3>مسئول المعمل </h3><input type="text" name="c_namelmasaul"> <br><br>

<h3>تاريخ الانشاء</h3><input type="date" name="c_datecreate"> <br><br>

<h3> عدد المعامل</h3> <select name="c_numlabs">
  <option value="0"></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  
  </select> <br><br>
  
<h3> عدد اجهزة الحاسب الالى</h3> <select name="c_numdevices">
  <option value="0"></option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  </select> <br><br>
  
<h3>التجهيزات الفنية للمعمل</h3>

<h4>وحدة تكييف</h4> <input type="checkbox" name="c_artsupplies" value="وحدةتكييف">

<h4>شاشة عرض </h4><input type="checkbox" name="c_artsupplies" value="شاشة عرض "><br>

<h3>مواصفات اجهزة الحاسب الالى</h3>

<h4>نوع المعالج</h4><input type="text" name="c_processortype">

<h4>سرعة  المعالج</h4><input type="text" name="c_prspeed"> 

<h4>حجم الرامات</h4> <input type="text" name="c_ramsize"> 

<h4>سرعة الانترنت</h4><input type="text" name="c_interspeed">
 <br><br>

<h4>الاوفيس</h4> <input type="text" name="c_office">

<h4>نظام التشغيل </h4><input type="text" name="c_operatingsystem"> <br><br>


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
if ( isset($_POST['c_name']) && isset($_POST['c_address']) && isset($_POST['c_eshhar'])&& isset($_POST['c_type'])&& isset($_POST['c_courses'])&& isset($_POST['c_experience'])&& isset($_POST['c_phone'])&& isset($_POST['c_email'])&& isset($_POST['c_website'])&& isset($_POST['c_numtrainer'])&& isset($_POST['c_erfak'])&& isset($_POST['c_nameclub'])&& isset($_POST['c_city'])&& isset($_POST['c_center'])&& isset($_POST['c_namelmasaul'])&& isset($_POST['c_datecreate'])&& isset($_POST['c_numlabs'])&& isset($_POST['c_numdevices'])&& isset($_POST['c_artsupplies'])&& isset($_POST['c_processortype'])&& isset($_POST['c_prspeed'])&& isset($_POST['c_ramsize'])&& isset($_POST['c_interspeed'])&& isset($_POST['c_office'])&& isset($_POST['c_operatingsystem'])) {
	
$sql = "INSERT INTO center 

(c_name,c_address,c_eshhar,c_type,c_courses,c_experience,c_phone,c_email,c_website,c_numtrainer,c_erfak,c_nameclub,c_city,c_center,c_namelmasaul,c_datecreate,c_numlabs,c_numdevices,c_artsupplies,c_processortype,c_prspeed,c_ramsize,c_interspeed,c_office,c_operatingsystem)

 VALUES 
 
 ('$_POST[c_name]','$_POST[c_address]','$_POST[c_eshhar]','$_POST[c_type]','$_POST[c_courses]','$_POST[c_experience]','$_POST[c_phone]','$_POST[c_email]','$_POST[c_website]','$_POST[c_numtrainer]','$_POST[c_erfak]','$_POST[c_nameclub]','$_POST[c_city]','$_POST[c_center]','$_POST[c_namelmasaul]','$_POST[c_datecreate]','$_POST[c_numlabs]','$_POST[c_numdevices]','$_POST[c_artsupplies]','$_POST[c_processortype]','$_POST[c_prspeed]','$_POST[c_ramsize]','$_POST[c_interspeed]','$_POST[c_office]','$_POST[c_operatingsystem]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>

</body>
</html>