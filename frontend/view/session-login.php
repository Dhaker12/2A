<?php
$login = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
if($login ='')
{

}
else
{
	session_start();
	$_SESSION['login']=$login;
	$_SESSION['logged']= true;
	header('Location: index-c.php');
}
?>