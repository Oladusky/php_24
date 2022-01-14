<?php
interface autoInterface 
{
  public function forward();
  public function backward();
  public function specialAbility();
}

abstract class Auto implements autoInterface 
{
  public $forward = 'Ехать вперед';
  public $backward = 'Ехать назад';
  public $ability;
  public function forward()
  {
  	echo $this->forward;
  }
  public function backward()
  {
  	echo $this->backward;
  }
  public function specialAbility() 
  {
  	echo $this->ability;
  }
  protected function refuel()
    {
        echo $this->fuel;
    }
}


class Bulldozer extends Auto 
{
    protected $fuel = 'diesel auto';
    public $ability = 'копать';
    public function refuel()
    {
        $this->refuel();
    }
}

class Truck extends Auto 
{
    protected $fuel = 'gas';
    public $ability = 'опустить кузов';
    
    public function refuel()
    {
        $this->refuel();
    }
}

class Tesla extends Auto
{
    protected $fuel = 'electricity';
    public $ability = 'заряжаться от электричества';
    public function refuel()
    {
        $this->refuel();
    }
}

$auto_1 = new Bulldozer();
$auto_2 = new Truck();
$auto_3 = new Tesla();
function testMachine($auto)
	{
		$auto->forward(); echo ' и ';
		$auto->specialAbility();echo '<br>';
	}
 testMachine($auto_1);
 testMachine($auto_2);
 testMachine($auto_3);
?>