<?
1.) 	What is the difference between public, protected, and private in a class definition?

Answer:

Private- Does not let you access a property or method outside the class. It needs to be accessed in the class by use of a function. If you were to create a function in a subclass it would not be able to be accessed either. 
Protected- Is much more flexible, this allows the property or method to be used in the class and its subclasses. 
Public- This allows the variable/method to accessed wherever the class is used globally. 

2.)	Extend the NumberGen class so the $start and $end members may be set (specified by the client) when the object is instantiated (constructed).

<?php

class NumberGen
{
	protected $start = 1;
	protected $end = 100;

	public function count(){
		for($x=$this->start; $x<$this->end; $x++){
			echo "$x <br />";
		}
	}
}

?>

Answer:
<?php
class NumberGen
{
	protected $start = 1;
	protected $end = 100;

	public function count(){
		for($x=$this->start; $x<$this->end; $x++){
			echo "$x <br />";
		}
    $myClass = new NumberGen();
    $myClass->start = 2; 
    
    $myClass = new NumberGen();
    $myClass->end = 200; 
	}
}

?>



3.)	What is wrong with this code?

class SomeClass
{
protected $_someMember;

public function __construct()
{
$this->_someMember = 1;
}

public static function getSomethingStatic()
{
return $this->_someMember * 5;
}
}

Answer: $this cannot be written with a static being used.   



4.)	Using the following code,
	A.) What are the first 4 numbers generated?
	B.) What value will be printed just before the while loop exits?

<?php

$data = array(1, 3, 4, 5, 9, 10, 20, 25);
$x = 0;
while($x<5){
	$n = $data[$x] * 2;
	echo "$n <br />";
	$x++;
}

?>

Answer A) 2, 6, 8, 10
Answer B) 18
