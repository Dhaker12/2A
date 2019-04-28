<?php

class team
{
      private $nom;
      private $game;
      private $nbr;
      private $mail;
      private $description;
      private $names;
      private $image;
      private $winr;

  function __construct($nom,$game,$nbr,$mail,$description,$names,$image,$winr)
  {
    $this->nom = $nom;
    $this->game = $game;
    $this->nbr = $nbr;
    $this->mail = $mail;
    $this->description = $description;
    $this->names = $names;
    $this->image = $image;
    $this->winr = $winr;
  }
  function getnom (){return $this->nom;}
  function getgame (){return $this->game;}
  function getnbr (){return $this->nbr;}
  function getmail (){return $this->mail;}
  function getdescription (){return $this->description;}
  function getnames (){return $this->names;}
  function getimage (){return $this->image;}
    function getwinr (){return $this->winr;}


  function setnom($nom){
    $this->nom=$nom;
  }
  function setgame($game){
    $this->game=$game;
  }
  function setnbr($nbr){
    $this->nbr=$nbr;
  }
  function setmail($mail){
    $this->mail=$mail;
  }
  function setdescription($description){
    $this->description=$description;
  }
  function setnames($names){
    $this->names=$names;
  }

}
?>
