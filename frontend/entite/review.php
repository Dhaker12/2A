<?PHP
class Review 
{
	
	private $name;
	private $country;
	private $week;
	private $message;
	private $rating;
	private $date;
	
	function __construct($name,$country,$week,$message,$rating,$date){
		
		$this->name=$name;
		$this->country=$country;
		$this->week=$week;
		$this->message=$message;
		$this->rating=$rating;
		$this->date=$date;
	}
	
	
	function getName(){
		return $this->name;
	}
	function getCountry(){
		return $this->country;
	}
	function getWeek(){
		return $this->week;
	}

	function getMessage(){
		return $this->message;
	}
	
	function getRating(){
		return $this->rating;
	}
	function getDate(){
		return $this->date;
	}




	function setName($name){
		$this->name=$name;
	}

	function setCountry($country){
		$this->country=$country;
	}
	function setWeek($week){
		$this->week=$week;
	}

	function setMessage($message){
		$this->message=$message;
	}

	function setRating($rating){
		$this->rating=$rating;
	}
	function setDate($date){
		$this->date=$date;
	}
	
}

?>