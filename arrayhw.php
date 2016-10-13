<?php
// Array Column


$people = array(
    array(
        'first_name' => 'Brittani',
        'last_name' => 'Brundage',
		'major' => 'Web and Info. Systems',
    ),
    array(
        'first_name' => 'Amanda',
        'last_name' => 'Byrne',
		'major' => 'Business and Info. Systems',
    ),
    array(
        'first_name' => 'Laurie',
        'last_name' => 'Kline',
		'major' => 'Business',
    ),
    array(
        'first_name' => 'Marisa',
        'last_name' => 'Oliveros',
		'major' => 'Architecture',
    ),
	array(
        'first_name' => 'Patrick',
        'last_name' => 'Sambrowski',
		'major' => 'Biomedical Engineering',
    )
);
 
$first_name = array_column($people, 'first_name');
print_r($first_name)    ;

 
 

//Array Chunk
print_r(array_chunk($people, 2))    ;

 
 

//Array Filter

function odd($var)
{

    return($var & 1);
}

function even($var)
{
   
    return(!($var & 1));
}

$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"))    ;
echo "Even:\n";
print_r(array_filter($array2, "even"))    ;

 
 


//Array Merge

$result = array_merge($array1, $array2);
print_r($result)    ;

 
 

//Array Merge Recursive 

$result2 = array_merge_recursive($array1, $array2);
print_r($result2)    ;

 
 

//Array Push

$name = array("Brittani", "Marie");
array_push($name, "Brundage");
print_r($name)    ;

 
 

//Array Pop

$name2 = array("Brittani", "Marie", "Brundage");
$pname = array_pop($name2);
print_r($name2)    ;

 
 


//Array Shift

$name3 = array("Brittani", "Marie", "Brundage");
$sname = array_shift($name3);
print_r($name3)    ;

 
 

//Array Unshift

$name4 = array("Brittani", "Marie");
array_unshift($name4, "Brundage");
print_r($name4)    ;


//Array Search

$bella = array(0 => 'yellow', 1 => 'green', 2 => 'apple', 3 => 'orange');

$bella2 = array_search('apple', $bella);
print_r($bella2)    ;



//Array Values

print_r(array_values($bella))    ;

//Array Sum

$numbers = array(22, 43, 62, 81);
echo "sum of numbers = " . array_sum($numbers) ;

//Array Change Case

$changing = array("BrittAni" => 23, "TiffAni" => 20);
print_r(array_change_key_case($changing, CASE_UPPER))  ;

//Array Product

$product = array(1, 2, 3, 4);
echo "product(a) = " . array_product($product)  ;


//Array Slice

$slice = array("apple", "banana", "strawberry", "blueberry", "rasberry");

$sliced = array_slice($slice, 2);  


print_r($sliced);

?>

