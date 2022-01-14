<?php

function findId($funcionarios, $id){
    foreach($funcionarios as $func){
        if($func['id'] == $id){
            return $func;
        }
    }

    return null;
}

$funcionarios = [
    ['id' => 4, 'nome' => 'João', 'salario' => 1500],
    ['id' => 21, 'nome' => 'José', 'salario' => 1230.50],
    ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54],
    ['id' => 1, 'nome' => 'kevin', 'salario' => 15000],
    ['id' => 3, 'nome' => 'victor', 'salario' => 16000],
    ['id' => 5, 'nome' => 'denner', 'salario' => 17000],
    ['id' => 7, 'nome' => 'edu', 'salario' => 18000],

];

$id = $_POST['id'];

$func = findId($funcionarios, $id);

echo $func['nome'] . ' - R$ ' . number_format($func['salario'], 2);

?>