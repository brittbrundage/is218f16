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



?>