<?php

include "../config.php";

class cartc
{

function ajoutercart($cart){

    $sql="insert into cart (login,nom,prix) values (:login,:nom,:prix)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

       $login=$cart->getlogin();
        $nom=$cart->getnom();
        $prix=$cart->getprix();
       
    
    $req->bindValue(':login',$login);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':prix',$prix);
 
    
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
  function recuperercart($reference){
        //$sql="SElECT * From client where email=$email";

        $sql="SELECT * from produit where reference='$reference'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function showcarts($login){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
       
        $sql="SElECT * from cart where login='$login'";
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
  function modifiercart($quantite,$nom){
      
            $sql="UPDATE cart SET quantite=:quantite WHERE nom=:nom";
         

        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':quantite',$quantite);
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
