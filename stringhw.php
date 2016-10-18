<?php

//Add Slashes

$str = "how 'bout them red sox?";

echo addslashes($str);


echo (" <br />");
echo (" <br />");

//CHR

echo chr(834);


echo (" <br />");
echo (" <br />");

//Chunk Split

$str3 = "Hello there, name is Brittani";
echo chunk_split($str3, 3);

echo (" <br />");
echo (" <br />");

//Count Chars

$counting = "Brittani Marie Brundage";

foreach (count_chars($counting, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
}

echo (" <br />");
echo (" <br />");

//Explode


$explode = 'uno, dos, tres ,cuatro';


print_r(explode(',', $explode, -1));

echo (" <br />");
echo (" <br />");


//Implode


$name = array('firstname', 'lastname');
$implode = implode(" , ", $name);

echo $implode; 


echo (" <br />");
echo (" <br />");

?>