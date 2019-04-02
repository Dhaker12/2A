<?php
session_start();
if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
	# code...
}
else
{
	$login=isset($_SESSION['login']) ? $_SESSION['login'] : '';
}

?>