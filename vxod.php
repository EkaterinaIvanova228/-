<?php require "tools.php" ?>
<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<!-- saved from url=(0060)file:///C:/Users/%D0%94%D0%B8%D0%BC%D0%B0/Desktop/index.html -->
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=windows->1252">
	<meta charset="utf-8" />
</head>
<body>
<header>
<ul>
<li class="oli">
xu 
</li>
<li>
<a href="Katalog.php">Каталог </a>
</li>
<li>
</li>
<li>
<a href="o kompanii.php">О компании узнавайте здесь </a>
</li>
<li>
<a href="regestrazia no ne kostrazia.php">Регестрация но не кострация  </a>
</li>
</ul>

</header> 
<?php
$cow=0;
if (isset($_POST['submit'])){
	$login=$_POST['login'];
	$password=$_POST['password'];
	$zebrazebra=mysql_query("select password from carts where login = '".$login."'")or die(mysql_error());
	if ($zebrazebra){
		echo 'ne';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
		}		
	}
?>
<form action="vxod.php" method="post" class='card-form'>
<input class="inp" type="text"placeholder="логин" name="login" id='login'>
<input class="inp" type="text"placeholder="пароль " name="password" id='password'>

	<input type="submit" value="плати налог " name="submit" id='submit'>
</form>
</body></html>