<?php
session_start();
include "../core/clientC.php";
$clientc=new ClientC();
$list=$clientc->afficherclients();
if (isset($_POST['email']) && isset($_POST['password']) )
{
$var=1;
foreach ($list as $row) 
{
	if($_POST['email']==$row['email'] && $_POST['password']==$row['password'])
		$var=0;
}
if($var==0)
{
header('Location: index-c.php');
}
else
{
	

	?>
	<script type="text/javascript">
		  
	alert("check your email/password");
		window.location.href="index.html";
		</script>

	<?php
}
}

?>