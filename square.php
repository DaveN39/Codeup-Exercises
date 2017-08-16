<?php 
require_once('rectangle.php');
class Square extends Rectangle 
{
	public function __construct($height) 
	{
		parent::__construct($height,$height);
	}
	public function perimeter() 
	{
		return ($this->getHeight() + $this->getHeight()) + ($this->getWidth() + $this->getWidth());
	}
	public function area() 
	{
		return $this->getHeight() * $this->getWidth();
	}
}
 ?>