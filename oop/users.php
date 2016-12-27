<?php
class User{
	public $name;
	public $login; 
	public $password;

	function __construct($name, $login, $password) {
		$this -> name = $name;
		$this -> login = $login;
		$this -> password = $password;
	}

	function __destruct() {
		echo "\n user {$this -> login} was deleted";
	}

	public function showInfo() {
		echo "<hr>";
		echo "my name is: " 		.	$this->name . $this->newString();
		echo "my login is: " 	. 	$this->login . $this->newString();
		echo "my password is: " . 	$this->password . $this->newString();
		// $this -> newString();
	}
	protected function newString() {
		echo  "\n";
	}
}

/**
* 
*/
class SuperUser extends User{
	public $role;
	function __construct($name, $login, $password, $role)
	{
		parent::__construct($name, $login, $password);
		$this -> role = $role;
	}
	
	public function showInfo() {
		parent::showInfo();
		echo "my role is: " . $this->role . $this->newString();
	}
}

$user1 = new User("John", "John_login", "John_password");
$user1 -> showInfo();

$user2 = new User("Teddy","Trddy_login","Teddy_password");
$user2 -> showInfo();

$user3 = new User("Alfred","Alfred_login","Alfred_password");	
$user3 -> showInfo();

$user4 = new SuperUser("Admin","su","su_password","admin");
$user4-> showInfo();


