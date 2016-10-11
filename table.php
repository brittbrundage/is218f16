<?php

$people = array(
    array( ),
    array(),
    array( ),
    array( ),
    array( )
);

echo '<table border="4">';
echo '<tr><th></th><th></th><th></th></tr>';
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

?>