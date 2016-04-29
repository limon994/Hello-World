<?php
class HelloWorld
{
	private $message="Hello World";
	public function __construct($message)
	{
		$this->message = $message;
	}
	public function setMessage($message)
	{
		$this->message = $message;
	}
	public function getMessage()
	{
		return $this->message;
	}
}
?>
