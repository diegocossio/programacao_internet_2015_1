<?php 
//ex1 array simples

// $arr = array(6 => 5, 13 => 9, "a" => 42);
// print_r($arr);
// echo count($arr);

//----------------------


// function mostra_array($arr){
//     for($i=0; $i < count($arr); $i++)
//     {
//         echo $arr[$i]."<br />";
//     }
//     echo "<br />";
//     echo "<br />";
// }
// //ex2 array ordenação com sort
// $arr = array(100, 5, 9, 42);
// mostra_array($arr);

// sort($arr);
// mostra_array($arr);


//---------------------------
//ex3 array ordenação com asort


// $data[] = array('volume' => 67, 'edition' => 2);
// $data[] = array('volume' => 86, 'edition' => 1);
// $data[] = array('volume' => 85, 'edition' => 6);
// $data[] = array('volume' => 98, 'edition' => 3);
// $data[] = array('volume' => 100, 'edition' => 9);
// $data[] = array('volume' => 55, 'edition' => 7);



// $data[] = array('edition'  => 2, 'volume' => 67);
// $data[] = array('edition'  => 1, 'volume' => 86);
// $data[] = array('edition'  => 6, 'volume' => 85);
// $data[] = array('edition'  => 3, 'volume' => 98);
// $data[] = array( 'edition' => 9, 'volume' => 100);
// $data[] = array('edition'  => 7, 'volume' => 55);

// echo count($data);

// function mostra_multd_array($arr){
//     foreach($arr as $key => $value)
//     {
//         print_r($value);
//         echo "<br />";
//     }
//     echo "<br />";
//     echo "<br />";
// }


// echo "<br />";
// mostra_multd_array($data);
// asort($data);

// echo "<br />";
// mostra_multd_array($data);

// ----------------------
//ex4 array multidimensional e ordenação

// $data[] = array('volume' => 67, 'edition' => 2);
// $data[] = array('volume' => 86, 'edition' => 1);
// $data[] = array('volume' => 85, 'edition' => 6);
// $data[] = array('volume' => 100, 'edition' => 2);
// $data[] = array('volume' => 100, 'edition' => 6);
// $data[] = array('volume' => 55, 'edition' => 7);

// // echo $data[0]['edition'];

// //print_r($data);

// echo "<br />";
// echo "<table width='400' border='1'>";

// // Obtemos uma lista de colunas
// foreach ($data as $key => $row) {
// 	echo "<tr>";
//     $volume[$key]  = $row['volume'];
//     $edition[$key] = $row['edition'];
//     echo "<td>".$volume[$key]."</td><td>".$edition[$key]."</td>";
// 	echo "<tr>";
// }
// echo "</table>";


// // Ordena os dados com volume descendente, edition ascendente
// // adiciona $data como o último parãmetro, para ordenar pela chave comum
// array_multisort($volume, SORT_ASC, $edition, SORT_DESC, $data);

// echo "<br />";
// echo "<table width='400' border='1'>";
// // Obter uma lista de colunas
// foreach ($data as $key => $row) {
// 	echo "<tr>";
//     $volume[$key]  = $row['volume'];
//     $edition[$key] = $row['edition'];
//     echo "<td>".$volume[$key]."</td><td>".$edition[$key]."</td>";
// 	echo "<tr>";
// }
// echo "</table>";


// ----------------------


//ex5 array multidimensional ordenação por diferentes colunas

// $dados_alunos[] = array('nome' => 'João',  'nota' => 67, 'faltas' => 2);
// $dados_alunos[] = array('nome' => 'Marcos', 'nota' => 86, 'faltas' => 1);
// $dados_alunos[] = array('nome' => 'Ana', 'nota' => 85, 'faltas' => 6);
// $dados_alunos[] = array('nome' => 'Gustavo', 'nota' => 98, 'faltas' => 2);
// $dados_alunos[] = array('nome' => 'Marcelo', 'nota' => 100, 'faltas' => 6);
// $dados_alunos[] = array('nome' => 'Carlos', 'nota' => 55, 'faltas' => 7);

// echo "<br />";
// echo "<table width='400' border='1'>";

// // Obtemos uma lista de colunas
// foreach ($dados_alunos as $key => $row) {
// 	echo "<tr>";
//     $nome[$key]  = $row['nome'];
//     $nota[$key]  = $row['nota'];
//     $faltas[$key] = $row['faltas'];
//     echo "<td>".$nome[$key]."</td><td>".$nota[$key]."</td><td>".$faltas[$key]."</td>";
// 	echo "<tr>";
// }
// echo "</table>";


// // Ordena os dados com nota descendente, faltas ascendente
// // adiciona $dados_alunos como o último parãmetro, para ordenar pela chave comum
// array_multisort($nota, SORT_DESC, $dados_alunos);

// echo "<br />";
// echo "<table width='400' border='1'>";
// // Obter uma lista de colunas
// foreach ($dados_alunos as $key => $row) {
// 	echo "<tr>";
//     $nome[$key]  = $row['nome'];
//     $nota[$key]  = $row['nota'];
//     $faltas[$key] = $row['faltas'];
//     echo "<td>".$nome[$key]."</td><td>".$nota[$key]."</td><td>".$faltas[$key]."</td>";
// 	echo "<tr>";
// }
// echo "</table>";



// array_multisort($nome, SORT_ASC, $dados_alunos);

// echo "<br />";
// echo "<table width='400' border='1'>";
// // Obter uma lista de colunas
// foreach ($dados_alunos as $key => $row) {
// 	echo "<tr>";
//     $nome[$key]  = $row['nome'];
//     $nota[$key]  = $row['nota'];
//     $faltas[$key] = $row['faltas'];
//     echo "<td>".$nome[$key]."</td><td>".$nota[$key]."</td><td>".$faltas[$key]."</td>";
// 	echo "<tr>";
// }
// echo "</table>";


// ----------------------

/*
 * Exercício:
 * Crie um array multidimensional de carros onde o índice será a marca (Vw, GM, Fiat, Ford) 
 * e para cada uma dessas marcas/posições adicione 4 veículos. Depois imprima o carro 3 da Vw, 
 * o carro 1 da Fiat e o carro 2 da Ford.
 */


?>
