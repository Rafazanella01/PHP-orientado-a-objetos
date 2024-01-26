<?php

require_once __DIR__ ."/pessoa.php";


Class professores extends pessoa{

    public $disciplinas = array();

    public function __construct($nome, $idade, $disciplinas = array()){
        parent:: __construct($nome, $idade);

        $this->disciplinas = $disciplinas;
        
    }    
}

   


?>