<?php

//Optional Arguments 

function foo () {
	
	$args = func_get_args();
	
	foreach ($args as $k => $v) {
		echo "arg".($k+1).": $v<br>";
	}
}
foo();
foo('hello<br>');
foo('hi', 'hey', 'hello<br><br>');

//Glob 

$files = glob.('../images/a*.jpg');
$files = array_map('realpath',$files);
print_r($files);
echo "Glob Function<br><br>";

//Memory Usage Information 

echo "Initial: ".memory_get_usage()." bytes <br>";
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
 
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
 
echo "Final: ".memory_get_usage()." bytes <br>";
echo "Peak: ".memory_get_peak_usage()." bytes <br><br>";




?>