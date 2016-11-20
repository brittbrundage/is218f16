<?php

echo "Super Globals<br><br>";

function globals() {
    $test = "local variable";

    echo '$test in global scope: ' . $GLOBALS["test"] . "\n";
	echo "<br><br>";
    echo '$test in current scope: ' . $test . "\n";
	echo "<br><br>";
}

$test = "Example content";
globals();



?>