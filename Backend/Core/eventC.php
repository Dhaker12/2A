<?php
include "../config.php";
class eventc
{

function ajouterevent($event){
    $sql="insert into events (name,place,description) values (:name,:place,:description)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

    
        $name=$event->getname();
       
        $description=$event->getdescription();
        $place=$event->getplace();
    

    $req->bindValue(':name',$name);
    $req->bindValue(':place',$place);
    $req->bindValue(':description',$description);
    
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  

} 

 ?>
