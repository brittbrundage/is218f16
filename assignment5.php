<?php


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
?>













?>
