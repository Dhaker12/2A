<?php
include "../config.php";
class cartc
{

function ajoutercart($cart){
    $sql="insert into cart (login,nom,prix,quantite) values (:login,:nom,:prix,:quantite)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $login=$cart->getlogin();
        $nom=$cart->getnom();
        $prix=$cart->getprix();
        $quantite=$cart->getquantite();
       
     
    
    $req->bindValue(':login',$login);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prix',$prix);
    $req->bindValue(':quantite',$quantite);
   
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showcart ($cart){
        echo "login: ".$cart->getlogin()."<br>";
        echo "nom: ".$cart->getnom()."<br>";
        echo "prix: ".$cart->getprix()."<br>";
        echo "quantite: ".$cart->getquantite()."<br>";
      
    }
  

function showcarts(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From cart";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

function deletecart($login){
        $sql="DELETE FROM cart where login= :login";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':login',$login);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifiercart($ref,$modif){
         
         
            $sql="UPDATE cart SET quantite=:input WHERE reference=:ref";
        
        

        
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

} 

 ?>
