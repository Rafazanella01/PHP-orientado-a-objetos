<?php

require_once __DIR__ ."/pessoa.php";

Class alunos extends pessoa{

    public $matricula;
    public $notas;

    public function __construct($nome, $idade, $matricula, $notas){
        parent:: __construct($nome, $idade);

        $this->matricula = $matricula;
        $this->notas = $notas;

    }

}



?>