<?php 

class ctl_Login
{
	private $user;
	private $pass;

	public function __construct($user, $pass)
	{
		$this->user = $user;
		$this->pass = $pass;
	}


	public function Validate()
	{
		if ($this->user == 'devlusaja' && $this->pass == '123456') {
			return true;
		} else {
			return false;
		}
	}
}

?>