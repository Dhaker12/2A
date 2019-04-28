<?php
include "../config.php";
class playerc
{

function ajouterPlayer($player){
        $sql="insert into team (name,nick,role,kda,kills,bio,image) values (:name,:nick,:role,:kda,:kill,:bio,:image)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $name=$player->getname();
        $nick=$player->getnick();
        $role=$player->getrole();
        $kda=$player->getkda();
        $kill=$player->getkill();
        $bio=$player->getbio();
        $image=$player->getimage();
        $req->bindValue(':name',$name);
        $req->bindValue(':nick',$nick);
        $req->bindValue(':role',$role);
        $req->bindValue(':kill',$kill);
        $req->bindValue(':kda',$kda);
        $req->bindValue(':bio',$bio);
        $req->bindValue(':image',$image);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    function showid(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From team ORDER BY id DESC LIMIT 1 ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function showplayers(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From team";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherpc($nom){
        //$sql="SElECT * From medecin e inner join formationphp.medecin a on e.nom= a.nom";
        $sql="SElECT * From team where clan='$nom' ";
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
