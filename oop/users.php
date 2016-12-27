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

function __autoload($class){
	include $class.'.class.php';
}

$user1 = new User("John", "John_login", "John_password");
$user1 -> showInfo();

$user2 = new User("Teddy","Trddy_login","Teddy_password");
$user2 -> showInfo();

$user3 = new User("Alfred","Alfred_login","Alfred_password");	
$user3 -> showInfo();

$user4 = new SuperUser("Admin","su","su_password","admin");
$user4-> showInfo();
print_r($user4->getInfo());


