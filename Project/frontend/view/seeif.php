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
		{
			$var=0;
			$email=$row['email'];
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$address=$row['address'];
		$companyname=$row['companyname'];
		$town=$row['town'];
		$phone=$row['phone'];
		$state=$row['state'];
		$postcode=$row['postcode'];
		$country=$row['country'];
		$password=$row['password'];
		$client1=new Client($fname,$lname,$address,$companyname,$town,$email,$phone,$state,$postcode,$country,$password);
   }
}
if($var==0)
{
	$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$client1->getfirstname();
$_SESSION['lname']=$client1->getlastname();
$_SESSION['phone']=$client1->getphone();

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