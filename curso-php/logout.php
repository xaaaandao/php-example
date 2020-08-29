<?php
	session_start();
	session_destroy();
	unset($_COOKIE['usuario']);
	setcookie($_COOKIE['usuario', '']);
	header('Location: login.php');

