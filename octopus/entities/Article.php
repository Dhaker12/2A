<?php

class Article
{     private $name;
      private $avatar;
      private $description;
      private $type;
      private $image;

  function __construct($name,$avatar,$description,$type,$image)
  {
    $this->name = $name;
    $this->avatar = $avatar;
    $this->type = $type;
    $this->description = $description;
    $this->image = $image;
  }
  function getname (){return $this->name;}
  function getavatar (){return $this->avatar;}
  function gettype (){return $this->type;}
  function getdescription (){return $this->description;}
  function getimage (){return $this->image;}
  function setname($name){
    $this->name=$name;
  }
function setimage($image){
    $this->image=$image;
  }
  function setavatar($avatar){
    $this->avatar=$avatar;
  }
  function settype($type){
    $this->type=$type;
  }
  function setdescription($description){
    $this->description=$description;
  }
  
}
?>