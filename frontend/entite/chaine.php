<?php
class chaine{
      private $chaine;

 function __construct($chaine){
    $this->chaine=$chaine;
  }
  function getchaine(){
    return $this->chaine;
  }
  function setchaine($chaine){
    $this->chaine=$chaine;
  }
  

}
?>