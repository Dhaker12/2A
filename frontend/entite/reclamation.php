<?PHP
class Reclamation 
{
	
	private $date;
	private $numero;
	private $description;
	private $etat;
	private $nom;
	private $prenom;
	private $email;
	
	function __construct($date,$numero,$description,$etat,$nom,$prenom,$email){

		$this->date=$date;
		$this->numero=$numero;
		$this->description=$description;
		$this->etat=$etat;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
	}
	
	
	function getemail(){
		return $this->email;
	}
		function getDate(){
		return $this->date;
	}
	function getDescription(){
		return $this->description;
	}
	function getNom(){
		return $this->nom;
	}
	function getNumero(){
		return $this->numero;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEtat(){
		return $this->etat;
	}


	function setDate($date){
		$this->date=$date;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	function setemail($email){
		$this->email=$email;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	
	
}

?>