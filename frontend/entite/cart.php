<?php

class cart
{
      private $login;
      private $nom;
      private $prix;
      private $quantite;
      

  function __construct($login,$nom,$prix,$quantite)
  {
    $this->login = $login;
    $this->nom = $nom;
    $this->prix = $prix;
    $this->quantite = $quantite;
  
  }
  function getlogin (){return $this->login;}
  function getnom (){return $this->nom;}
  function getprix (){return $this->prix;}
  function getquantite (){return $this->quantite;}
 


  function setreference($login){
    $this->login=$login;
  }
  function setnom($nom){
    $this->nom=$nom;
  }
  function setprix($prix){
    $this->prix=$prix;
  }

   function setquantite($quantite){
    $this->quantite=$quantite;
  }

}
?>
