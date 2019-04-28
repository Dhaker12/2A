<?php
include "../config.php";
class teamc
{

function ajouterTeam($team){
    $sql="insert into teams (nom,game,nbr,mail,description,names,image,winr) values (:nom,:game,:nbr,:mail,:description,:names,:image,:winr)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $nom=$team->getnom();
        $game=$team->getgame();
        $nbr=$team->getnbr();
        $mail=$team->getmail();
        $description=$team->getdescription();
        $names=$team->getnames();
        $winr=$team->getwinr();
        $image=$team->getimage();
    
    $req->bindValue(':nom',$nom);
    $req->bindValue(':game',$game);
    $req->bindValue(':nbr',$nbr);
    $req->bindValue(':mail',$mail);
    $req->bindValue(':description',$description);
    $req->bindValue(':names',$names);
    $req->bindValue(':winr',$winr);
    $req->bindValue(':image',$image);
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showteam ($team){
        echo "nom: ".$team->getnom()."<br>";
        echo "game: ".$team->getgame()."<br>";
        echo "nbr: ".$team->getnbr()."<br>";
        echo "contact: ".$team->getmail()."<br>";
        echo "members: ".$team->getdescription()."<br>";
        echo "winr: ".$team->getwinr()."<br>";
        echo "image: ".$team->getimage()."<br>";

    }
  function showplayers(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT nick From team where clan='' ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
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

  function showid(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From teams ORDER BY id DESC LIMIT 1 ";
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
    function cs(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT COUNT(*) FROM teams WHERE game='Conter Strike'";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function all(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT COUNT(*) FROM teams";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function dota(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT COUNT(*) FROM teams WHERE game='Dota 2'";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
     function lol(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SELECT COUNT(*) FROM teams WHERE game='League of legends'";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

} 

 ?>
