<?PHP
include "../config.php";
class feedC {
function showfeed ($feed){
		echo "nom: ".$feed->getnom()."<br>";
		echo "mail: ".$efeed->getmail()."<br>";
		echo "desc: ".$feed->getdesc()."<br>";
	}
	
	function ajouterfeed($feed){
		$sql="insert into feed (nom,mail,bio) values (:nom,:mail,:desc)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);

        $nom=$feed->getnom();
        $mail=$feed->getmail();
        $desc=$feed->getdesc();
     
		$req->bindValue('nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':desc',$desc);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfeed(){
		$sql="SElECT * From feed";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfeed($nom){
		$sql="DELETE FROM feed where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>