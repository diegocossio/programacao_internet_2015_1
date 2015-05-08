<?php

$int=3600*24;
setcookie("aula_data","20-03",time()+$int);


echo $_COOKIE["aula_data"];
// echo "<br />";

print_r($_COOKIE);

// setcookie("aula_data","20-03",time()-10000);
// echo $_COOKIE["aula_data"];
 

?>
