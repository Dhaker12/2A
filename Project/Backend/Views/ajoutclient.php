<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['company']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['state']) && isset($_POST['city']) && isset($_POST['zip']) && isset($_POST['country']) && isset($_POST['password']))
{
$client1=new client($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['company'],$_POST['city'],$_POST['email']),$_POST['phone']),$_POST['state'],$_POST['zip'],$_POST['country'],$_POST['password']);

$client1C=new clientC();
$client1C->ajouterclient($client1);

	header('Location: index-c.html');
}else
{
	echo "vérifier les champs";
}
//*/

?>