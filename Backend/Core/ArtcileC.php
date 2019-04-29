 <?php
include "../config.php";
class ArticleC
{

function ajouterarticle($article){
   
    $sql="insert into orders (avater,type,date,description) values (:avatar,:type,:date,:description)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $avatar=$article->getavatar();
        $type=$article->gettype();
        $date=$article->getdate();
        $description=$article->getdescription();

       
        $req->bindValue(':avatar',$avatar);
        $req->bindValue(':type',$type);
        $req->bindValue(':date',$date);
        $req->bindValue(':description',$description);
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  /*function showteam ($team){
        echo "nom: ".$team->getnom()."<br>";
        echo "game: ".$team->getgame()."<br>";
        echo "nbr: ".$team->getnbr()."<br>";
        echo "contact: ".$team->getmail()."<br>";
        echo "members: ".$team->getdescription()."<br>";
        echo "members: ".$team->getnames()."<br>";
    }
  

function showteams(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From teams";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deleteteam($nom){
        $sql="DELETE FROM teams where nom= :nom";
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
*/
} 

 ?>
