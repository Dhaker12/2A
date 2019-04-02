<?PHP
class feed{
	private $nom;
	private $mail;
	private $desc;

	function __construct($nom,$mail,$desc){
		$this->nom=$nom;
		$this->mail=$mail;
		$this->desc=$desc;
		
	}
	
	function getnom(){
		return $this->nom;
	}
	function getmail(){
		return $this->mail;
	}
	function getdesc(){
		return $this->desc;
	}
	
	
}

?>