<?php 

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

function getDiaSemana($data) {
    list($ano, $mes, $dia) = explode("-", $data);
 
    $diasemana = date("w", mktime(0, 0, 0, $mes, $dia, $ano));
 
    switch ($diasemana) {
        case 0: $diasemana = "Domingo";
            break;
        case 1: $diasemana = "Segunda-Feira";
            break;
        case 2: $diasemana = "Terça-Feira";
            break;
        case 3: $diasemana = "Quarta-Feira";
            break;
        case 4: $diasemana = "Quinta-Feira";
            break;
        case 5: $diasemana = "Sexta-Feira";
            break;
        case 6: $diasemana = "Sábado";
            break;
    }
 
    return $diasemana;
}

echo getDiaSemana('2012-01-31'); 
// Prints something like: Monday
echo date("l");
echo "<br />";
// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
echo "<br />";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br />";

/* use the constants in the format parameter */
// prints something like: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822);
echo "<br />";

// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
echo "<br />";

 ?>