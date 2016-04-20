<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
echo"Welcome".$_SESSION['u_name']." ".$_SESSION['u_id'];

?>
<input type="text" value="<?php echo $_SESSION['u_name']?>"><br>
<a href="logout.php">Log out</a>
</body>
</html>