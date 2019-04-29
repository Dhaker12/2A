<?php

class order
{
      private $reference;
      private $name;
      private $date;
      private $state;
      private $quantite;
      private $total;
      private $dstate;

  function __construct($name,$quantite,$total)
  {
    $this->name= $name;
    $this->quantite = $quantite;
    $this->total = $total;
   
  }
  function getreference (){return $this->reference;}
  function getname (){return $this->name;}
  function getdate (){return $this->date;}
  function getstate (){return $this->state;}
  function getquantite (){return $this->quantite;}
  function gettotal (){return $this->total;}
  function getdstate (){return $this->dstate;}


  function setreference($reference){
    $this->reference=$reference;
  }
  function setname($name){
    $this->name=$name;
  }
  function setdate($date){
    $this->date=$date;
  }
  function setstate($state){
    $this->state=$state;
  }
  function settotal($total){
    $this->total=$total;
  }
  function setdstate($dstate){
    $this->dstate=$dstate;
  }
   function setquantite($quantite){
    $this->quantite=$quantite;
  }

}
?>
