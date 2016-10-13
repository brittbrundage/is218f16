<?php
$people = array(
    array('Brittani' , 'Brundage' , 'Web and Info. Systems' ),
    array('Amanda' , 'Byrne' , 'Business and Info. Systems' ),
    array('Laurie' , 'Kline' , 'Business' ),
    array('Marisa' , 'Oliveros' , 'Architecture' ),
    array('Patrick' , 'Sambroski' , 'Biomedical Engineering' )
);

echo '<table border="4">';
echo '<tr><th>First Name</th><th>Last Name</th><th>Major</th></tr>';
foreach( $people as $person )
{
    echo '<tr>';
    foreach( $person as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';



//array_column

$person = array_column($people, 'First Name');
print_r($people);








?>