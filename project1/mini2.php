<?php
//Strategy, Singleton, Factory 
echo '<br>';
class StrategyContext {
    public $strategy = NULL; 
    public function __construct($strategy_ind_id) {
        switch ($strategy_ind_id) {
            case 'a': 
                $this->strategy = new StrategyCaps();
            break;
            case 'b': 
                $this->strategy = new StrategyExclaim();
            break;
            case 'c': 
                $this->strategy = new StrategyStars();
            break;
        }
    }
    public function showVehiclecolor($Vehicle) {
      return $this->strategy->showcolor($Vehicle);
    }
}
interface StrategyInterface {
    public function showcolor($Vehicle_in);
}
 
class StrategyCaps implements StrategyInterface {
    public function showcolor($Vehicle_in) {
        $color = $Vehicle_in->getcolor();
        $this->colorCount++;
        return strtoupper ($color);
    }
}
class StrategyExclaim implements StrategyInterface {
    public function showcolor($Vehicle_in) {
        $color = $Vehicle_in->getcolor();
        $this->colorCount++;
        return Str_replace(' ','!',$color);
    }
}
class StrategyStars implements StrategyInterface {
    public function showcolor($Vehicle_in) {
        $color = $Vehicle_in->getcolor();
        $this->colorCount++;
        return Str_replace(' ','*',$color);
    }
}
class Vehicle {
    private $car;
    private $color;
    function __construct($color_in, $car_in) {
        $this->car = $car_in;
        $this->color  = $color_in;
    }
    function getcar() {
        return $this->car;
    }
    function getcolor() {
        return $this->color;
    }
    function getcarAndcolor() {
        return $this->getcolor() . ' by ' . $this->getcar();
    }
}
class Main
{
    private $VehicleMake;
    private $VehicleModel;
    public function __construct($make, $model)
    {
        $this->VehicleMake = $make;
        $this->VehicleModel = $model;
    }
    public function getMakeAndModel()
    {
        return $this->VehicleMake . ' ' . $this->VehicleModel;
    }
}
class MainFactory
{
    public static function create($make, $model)
    {
        return new Main($make, $model);
    }
}
class Singleton
{
    private static $instance;
    public static function getInstance()
    {
    }
    protected function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}
class SingletonChild extends Singleton
{
}
$Vehicle = new Vehicle('Blue','Chevy');
 
  $strategyContexta = new StrategyContext('abc');
  $strategyContextb = new StrategyContext('bcd');
  $strategyContextc = new StrategyContext('cde');
  print_r($Vehicle);
  function writeln($line_in) {
    echo $line_in."<br/>";
  }
?>