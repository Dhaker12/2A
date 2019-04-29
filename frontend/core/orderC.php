<?php
include "../config.php";
class orderc
{

function ajouterorder($order){
   
    $sql="insert into orders (name,date,quantite,total) values (:name,CURDATE(),:quantite,:total)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $name=$order->getname();
        $quantite=$order->getquantite();
        $total=$order->gettotal();
       
    
    $req->bindValue(':name',$name);
    $req->bindValue(':quantite',$quantite);
    $req->bindValue(':total',$total);
 
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showorder ($order){
        echo "reference: ".$order->getreference()."<br>";
        echo "name: ".$order->getname()."<br>";
        echo "date: ".$order->getdate()."<br>";
        echo "state: ".$order->getstate()."<br>";
        echo "quantite: ".$order->getquantite()."<br>";
        echo "total: ".$order->gettotal()."<br>";
        echo "dstate: ".$order->getdstate()."<br>";
    }
  

function showorders(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From orders";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deleteorder($reference){
        $sql="DELETE FROM orders where reference= :reference";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':reference',$reference);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function modifierorder($ref,$new,$modwhat){
        if ($modwhat=="state") {
            $sql="UPDATE orders SET state=:input WHERE reference=:ref";
        }
        if ($modwhat=="delivery state") {
            $sql="UPDATE orders SET dstate=:input WHERE reference=:ref";
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
function recupererorder($login){
        //$sql="SElECT * From client where email=$email";
        $sql="SELECT * from cart where login='$login'";
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
