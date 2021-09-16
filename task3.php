<?php

class MyClass
{
	private $name;
    private $age;
	public function get_name()
	{
		return $this->name;
	}

	public function set_name($set_name)
	{
        $this->name = $set_name;
	}
    public function get_age()
	{
		return $this->age;
	}

	public function set_age($set_age)
	{
        $this->age = $set_age;
	}
}

$mc = new MyClass();
$mc->set_name(' IFFATH JAHAN JOTHI');
$mc->set_age('23');
echo "My name is" ; 
echo $mc->get_name() ;
echo "I am" ; 
echo $mc->get_age();
echo "Year old" ; 
echo "<br>";
$mc2 = new MyClass();
$mc2->set_name(' IFFATH  JOTHI ');
$mc2->set_age('20');
echo "My name is" ; 
echo $mc2->get_name() ;
echo "I am" ; 
echo $mc2->get_age();
echo "Year old" ; 