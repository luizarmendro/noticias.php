<?php
session_start();
$produto = "Arroz";
$produto2 = "Feijão";
$produto3 = "Macarrão";
// inicializa o array produtos
$produtos = array(); //$produtos = ['Arroz', 'Feijão];
// Como que coloca o produto no array
array_push($produtos, $produto);
array_push($produtos, $produto2);
array_push($produtos, $produto3);
$_SESSION['produtos'] = $produtos;
echo '<ul>';
for($i = 0; $i < count($produtos); $i++){
    echo '<li>'.$produtos[$i].'</li>';
}
echo '</ul>';
?>