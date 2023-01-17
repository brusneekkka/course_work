<?php
	$login = $_GET['user'];
	$pass = $_GET['pass'];
	$linkbaza = mysqli_connect('localhost', 'root', 'root', 'kiosk');
	if ($linkbaza == false)
		echo mysqli_connect_error();
	mysqli_set_charset($linkbaza, "utf8");
	$pass = md5($pass);
	$sql = "SELECT pass FROM users WHERE login='".$login."'";
	$sql2 = "SELECT root FROM users WHERE login='".$login."'";
	
	$res = mysqli_query($linkbaza, $sql);
	$hashpass = mysqli_fetch_array($res);
	$res2 = mysqli_query($linkbaza, $sql2);
	$root = mysqli_fetch_array($res2);
	if (!strcmp($hashpass['pass'], $pass))
	{
		if ($root[0] == 'yes'){
			mysqli_close($linkbaza);
			setcookie('name', $login);
			setcookie('root', "yes");
			header("Location: http://localhost/course_work/admin/root.php", true, 303);
		}
		else
		{
			mysqli_close($linkbaza);
			setcookie("name", $login, time()+3600 * 24 * 7, '/');
			header("Location: http://localhost/course_work/user/catalog.php", true, 303);
		}
	}
	else
	{
		mysqli_close($linkbaza);
		setcookie('name', '');
		setcookie("message", "Неверный логин или пароль", time() + 30);
		header("Location: login.php", true, 303);
	}
?>
