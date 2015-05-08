<?php 

$palavra = "Paralelamente";

for($i = 0; $i < strlen($palavra); $i++)
{
	echo $palavra[$i]."<br />";
} 

$um_array = ["primeiro", "segundo", "terceiro"];
	echo "<br />";

foreach ($um_array as $key => $value) {
	echo $key ."=>". $value;
	echo "<br />";
}
	echo "<br />";

foreach ($um_array as $value) {
	echo $value;
	echo "<br />";
}
?>