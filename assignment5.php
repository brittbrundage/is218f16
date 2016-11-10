<?php

// if statements

echo '<b>If Statements</b><br><br>';

$dog = NULL;
if(is_null($dog)){
  echo 'Dog is Null<br><br>';
}

$fish = 'goldfish';
if(isset($fish)){
  echo 'Goldfish! <br><br>';
}
else{
  echo 'No Fish!<br><br>';
}


$car = '';
if(empty($car)){
  echo 'Empty Car Lot. <br><br>';
}
else{
  echo 'No Cars in Records<br><br>';
}


$truck = 'jeep';
if(empty($truck)){
  echo 'Empty Truck Lot.<br><br>';
}
else{
  $truck='Expedition!<br><br>';
}
echo $truck;
echo '<br><br>';


// switch statements

echo '<b>Switch Statements</b><br><br>';

$day = 'Monday';
switch ($day) {
	
	case isset($day):
	echo 'Have a great week!<br><br>';
	break;
		
	default:
	echo 'Its going to be a good day<br><br>';
	break;
	
}

$hours = 6;
switch ($hours){
	case empty($hours):
	echo 'Sorry no hours found<br><br>';
	break;
	
	default:
	echo '6 hours<br><br>';
	
}

$mins = "";
switch($mins) {
	case is_null($mins):
	echo 'Minutes is null<br><br>';
	break;
	
	default:
	echo 'No Minutes<br><br>';
	break;
	
}
	
	
$weekend = 'Saturday';
switch($weekend) {
	case isset($weekend):
	echo 'It is Saturday!<br><br>';
	break;
	
	case empty($weekend):
	echo 'Its not the weekend yet.<br><br>';
	break;	
	
	case is_null($weekend):
	echo 'NULL';
	break;
	
	default:
	echo 'Weekend just ended!<br><br>';
	break;
	
}
?>