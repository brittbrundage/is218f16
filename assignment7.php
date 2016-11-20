<?php

echo "Super Globals<br><br>";

//$GLOBALS

function globals() {
    $test = "local variable";

    echo '$test in global scope: ' . $GLOBALS["test"] . "\n";
	echo "<br><br>";
    echo '$test in current scope: ' . $test . "\n";
	echo "<br><br>";
}

$test = "Example content";
globals();

//$_SERVER

echo $_SERVER['SERVER_NAME'];

//$_GET

print_r($_GET);
if($_GET["a"] === "") echo "a is an empty string\n";
if($_GET["a"] === false) echo "a is false\n";
if($_GET["a"] === null) echo "a is null\n";
if(isset($_GET["a"])) echo "a is set\n";
if(!empty($_GET["a"])) echo "a is not empty";

echo "<br><br>"



?>