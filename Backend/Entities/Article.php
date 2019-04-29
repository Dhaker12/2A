<?php

class Article
{
      private $avatar;
      private $type;
      private $date;
      private $description;
      

  function __construct($avatar)
  {
    $this->avatar = $avatar;
    $this->type = $type;
    $this->date = $date;
    $this->description = $description;
  }
  function getavatar (){return $this->avatar;}
  function gettype (){return $this->type;}
  function getdate (){return $this->date;}
  function getdescription (){return $this->description;}
  

  function setavatar($avatar){
    $this->avatar=$avatar;
  }
  
}
?>