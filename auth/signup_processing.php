<?php
	$login = $_GET['user'];
	$pass = $_GET['pass'];
	$linkbaza = mysqli_connect('localhost', 'root', 'root', 'kiosk');
	if ($linkbaza == false)
		echo mysqli_connect_error();
	mysqli_set_charset($linkbaza, "utf8");
	$pass = md5($pass);
	$logins = "SELECT login FROM users WHERE login='$login'";
	$res = mysqli_query($linkbaza, $logins);
	$flag = 0;
	echo($login);
	while ($row = mysqli_fetch_array($res)) 
	{
    	if ($row['login'] == $login)
    	{
    		$flag = 1;
    	}
	}
	if ($flag > 0)
	{
		setcookie("message", "Уже существует юзер с таким никнеймом", time() + 3);
    	header("Location: signup.php", true, 303);
	}
    else 
    {
    	$sql = "INSERT INTO users (login, pass, root) VALUES ('$login', '$pass', 'no')";
		$res = mysqli_query($linkbaza, $sql);
		mysqli_close($linkbaza);
		setcookie("name", $login, time()+3600 * 24 * 7, '/');
		header("Location: http://localhost/course_work/user/catalog.php", true, 303);		
   	}	
?>