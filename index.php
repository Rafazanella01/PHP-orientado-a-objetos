<?php

require_once __DIR__ . "/classes/alunos.php";
require_once __DIR__ . "/classes/disciplina.php";
require_once __DIR__ . "/classes/professores.php";
require_once __DIR__ . "/classes/pessoa.php";

 
$professorFabio = new professores("Fábio", 45, array("Quimica", "Fisica"));
$professorEudes = new professores("Eudes",56, array("Matematica"));
$alunoRafa = new alunos("Rafael", 20, "m142054", array(10, 10, 10));
$alunoRubens = new alunos("Rubens", 23, "m435674", array(9,8,7));


 $disciplina = new disciplina("Matematica", 60, $professorEudes, array($alunoRafa, $alunoRubens));
 


// $result = json_encode($disciplina, JSON_PRETTY_PRINT);

$dados = __DIR__ .'/dados.json';
 file_put_contents($dados, json_encode($disciplina, JSON_PRETTY_PRINT));

 //$caminhoArquivo = __DIR__ . '/Dados.txt';
 //$arquivo = fopen($caminhoArquivo, "R");



?>