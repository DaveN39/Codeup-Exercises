<?php 
class Rectangle 
{
	public $height;
	public $width; 
	public function __construct($height,$width) 
	{
		$this->height = $height;
		$this->width = $width;
	}
	// SETTERS
	public function setHeight($height) 
	{
		$this->height = $height;
	}
	public function setWidth($width)
	{
		$this->width = $width;
	}
	// GETTERS
	public function getHeight() 
	{
		return $this->height;
	}
	public function getWidth() 
	{
		return $this->width;
	}
	
	public function area() 
	{
		return $this->height * $this->width;
	}
	public function perimeter() 
	{
		return ($this->height + $this->height) + ($this->width + $this->width);
	}
}
 ?>