<?php
class player
{
      private $name;
      private $nick;
      private $role;
      private $kda;
      private $kill;
      private $bio;
      private $image;

 function __construct($name,$nick,$role,$kda,$kill,$bio,$image){
    $this->name=$name;
    $this->nick=$nick;
    $this->role=$role;
    $this->kda=$kda;
    
    $this->kill=$kill;

    $this->bio=$bio;
    $this->image=$image;
  }
  function getname(){
    return $this->name;
  }
  function getnick(){
    return $this->nick;
  }
  function getrole(){
    return $this->role;
  }
  function getkda(){
    return $this->kda;
  }
  function getkill(){
    return $this->kill;
  }
    function getbio(){
    return $this->bio;
  }
function getimage(){
    return $this->image;
  }

  function setname($name){
    $this->name=$name;
  }
  function setnick($nick){
    $this->nick=$nick;
  }
  function setrole($role){
    $this->role=$role;
  }
  function setkda($kda){
    $this->kda=$kda;
  }
  function setkill($kill){
    $this->kill=$kill;
  }
  function setbio($bio){
    $this->bio=$bio;
  }

}
?>
