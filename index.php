<?php
require_once('auth.php');
if(empty($_SESSION['token'])){
	echo "
	<a href ='https://oauth.vk.com/authorize?client_id=".$appid."&display=page&redirect_uri=".redirect_uri."&scope=".scope."&response_type=code&v=5.131'> Авторизация</a>
	";
}
else {
	echo"Авторизовались
	<br>
	Токен:".$_SESSION['token']."<br>
	<a href='logout.php'>Выход</a>";
}
?>