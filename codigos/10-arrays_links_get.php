<?php 

//ex4 array multidimensional ordenação por diferentes colunas

$dados_alunos[] = array('nome' => 'João',  'nota' => 67, 'faltas' => 2);
$dados_alunos[] = array('nome' => 'Marcos', 'nota' => 86, 'faltas' => 1);
$dados_alunos[] = array('nome' => 'Ana', 'nota' => 85, 'faltas' => 6);
$dados_alunos[] = array('nome' => 'Gustavo', 'nota' => 98, 'faltas' => 2);
$dados_alunos[] = array('nome' => 'Marcelo', 'nota' => 100, 'faltas' => 6);
$dados_alunos[] = array('nome' => 'Carlos', 'nota' => 55, 'faltas' => 7);

foreach ($dados_alunos as $key => $row) {
    $nome[$key]  = $row['nome'];
    $nota[$key]  = $row['nota'];
    $faltas[$key] = $row['faltas'];
}


function sort_my_array($arr, $field)
{
	array_multisort($field, SORT_ASC, $arr);
	return $arr;

}

// print_r($_GET['ordena']);
if(isset($_GET['ordena']))
{
	switch ($_GET['ordena']) {
		case 'nome':
			$dados_alunos = sort_my_array($dados_alunos,$nome);
			break;
		case 'nota':
			$dados_alunos = sort_my_array($dados_alunos,$nota);
			break;
		case 'faltas':
			$dados_alunos = sort_my_array($dados_alunos,$faltas);
			break;
		
		default:
			# code...
			break;
	}
} 

echo "<br />";
echo "<table width='400' border='1'>";
echo "<tr>";
echo "<td><a href='10-arrays_links_get.php?ordena=nome'>Nome</a></td>";
echo "<td><a href='10-arrays_links_get.php?ordena=nota'>Nota</a></td>";
echo "<td><a href='10-arrays_links_get.php?ordena=faltas'>Faltas</a></td>";
echo "</tr>";

// Obtemos uma lista de colunas


foreach ($dados_alunos as $key => $row) {
    $nome[$key]  = $row['nome'];
    $nota[$key]  = $row['nota'];
    $faltas[$key] = $row['faltas'];
    echo "<td>".$nome[$key]."</td><td>".$nota[$key]."</td><td>".$faltas[$key]."</td>";
	echo "<tr>";
}
echo "</table>";


?>
