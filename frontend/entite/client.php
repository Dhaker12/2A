<?PHP
class Client{
	private $firstname;
	private $lastname;
	private $address;
	private $companyname;
	private $town;
	private $email;
	private $phone;
	private $state;
	private $postcode;
	private $country;
	private $password;
	function __construct($firstname,$lastname,$address,$companyname,$town,$email,$phone,$state,$postcode,$country,$password){
		$this->firstname=$firstname;
	$this->lastname=$lastname;
	$this->address=$address;
	$this->companyname=$companyname;
	$this->town=$town;
	$this->email=$email;
	$this->phone=$phone;
	$this->state=$state;
	$this->postcode=$postcode;
	$this->country=$country;
	$this->password=$password;
	}
	
	function getfirstname(){
		return $this->firstname;
	}
	function getlastname(){
		return $this->lastname;
	}
	function getaddress(){
		return $this->address;
	}
	function getcompanyname(){
		return $this->companyname;
	}
	function gettown(){
		return $this->town;
	}
	function getemail(){
		return $this->email;
	}
	function getphone(){
		return $this->phone;
	}
	function getstate(){
		return $this->state;
	}
	function getpostcode(){
		return $this->postcode;
	}
	function getcountry(){
		return $this->country;
	}
	function getpassword(){
		return $this->password;
	}

	function setpassword($password){
		$this->password=$password;
	}
	function setfirstname($firstname){
		$this->firstname=$firstname;
	}
	function setlastname($lastname){
		$this->lastname=$lastname;
	}
	function setaddress($address){
		$this->address=$address;
	}
	function setcompanyname($companyname){
		$this->companyname=$companyname;
	}
	function settown($town){
		$this->town=$town;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setphone($phone){
		$this->phone=$phone;
	}
	function setstate($state){
		$this->state=$state;
	}
	function setpostcode($postcode){
		$this->postcode=$postcode;
	}
	function setcountry($country){
		$this->country=$country;
	}
	
}

?>