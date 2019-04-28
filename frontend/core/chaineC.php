<?php
class chainec
{
    function showchaine(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From twitch ORDER BY id DESC LIMIT 1 ";
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