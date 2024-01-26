<?php
    

    Class disciplina{

        public $nome;
        public $carga_horaria;
        public $professor;
        public array $alunos = [];


        public function __construct($nome, $carga_horaria, $professor, array $alunos){

            $this->nome = $nome;
            $this->carga_horaria = $carga_horaria;
            $this->professor = $professor;
            $this->alunos = $alunos;
            
        }

       


    }



?>