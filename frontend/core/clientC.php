<?PHP

include "../entities/client.php";
include "../config.php";
class ClientC {
function afficherclient ($client){
		echo "first name : ".$client->getfirstname()."<br>";
		echo "last name : ".$client->getlastname()."<br>";
		echo "address : ".$client->getaddress()."<br>";
		echo "company name: ".$client->getcompanyname()."<br>";
		echo "town : ".$client->gettown()."<br>";
		echo "email address : ".$client->getemail()."<br>";
		echo "phone : ".$client->getphone()."<br>";
		echo "state : ".$client->getstate()."<br>";
		echo "postcode : ".$client->getpostcode()."<br>";
		echo "country : ".$client->getcountry()."<br>";
	}
	
	function ajouterclient($client){
		$sql="insert into client (firstname,lastname,address,companyname,town,email,phone,state,postcode,country,password) values (:firstname,:lastname,:address,:companyname,:town,:email,:phone,:state,:postcode,:country,:password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        
		$firstname=$client->getfirstname();
        $lastname=$client->getlastname();
		$address=$client->getaddress();
		$companyname=$client->getcompanyname();
		$town=$client->gettown();
		$email=$client->getemail();
		$phone=$client->getphone();
		$state=$client->getstate();
		$postcode=$client->getpostcode();
		$country=$client->getcountry();
		$password=$client->getpassword();

		$req->bindValue(':firstname',$firstname);
		$req->bindValue(':lastname',$lastname);
		$req->bindValue(':address',$address);
		$req->bindValue(':companyname',$companyname);
		$req->bindValue(':town',$town);
		$req->bindValue(':email',$email);
		$req->bindValue(':phone',$phone);
		$req->bindValue(':state',$state);
		$req->bindValue(':postcode',$postcode);
		$req->bindValue(':country',$country);
		$req->bindValue(':password',$password);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($email){
		$sql="DELETE FROM client where email= :email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':email',$email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($ref,$new,$modwhat){
		if ($modwhat=="last name") {
			$sql="UPDATE client SET lastname=:input WHERE email=:ref";
		}
		if ($modwhat=="first name") {
			$sql="UPDATE client SET firstname=:input WHERE email=:ref";

		}
		if ($modwhat=="address") {
			$sql="UPDATE client SET address=:input WHERE email=:ref";
		}
		if ($modwhat=="email") {
			$sql="UPDATE client SET email=:input WHERE email=:ref";
		}
		if ($modwhat=="company") {
			$sql="UPDATE client SET companyname=:input WHERE email=:ref";
		}

		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$new);
		$req->bindValue(':ref',$ref);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
	function recupererclient($email){
		$sql="SELECT * from client where email=$email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>