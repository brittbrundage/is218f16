<?php

//Optional Arguments 

function foo () {
	
	$args = func_get_args();
	
	foreach ($args as $k => $v) {
		echo "arg".($k+1).": $v<br>";
	}
}
foo();
foo('hello');
foo('hi', 'hey', 'hello');






?>