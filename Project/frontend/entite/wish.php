<?php
class Wish
{
	private $Reference;
	
	private $email;
	

	 function __construct($reference,$email){

	 	$this->Reference = $reference;
	 	
	 	$this->email=$email; 
	 	

	 }

	 function getReference()
	 {
	 	return $this->Reference;
	 }

	 
	 function getemail()
	 {
	 	return $this->email;
	 }
	 function setReference($reference)
	 {
	 	$this->Reference = $reference;
	 } 
	 function setemail($email)
	 {
	 	$this->email = $email;
	 }

	
}

?>