<?
class SuperUser extends User implements ISuperUser{
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
	public function getInfo() {
		return [$this->name => $this->role];
	}
}