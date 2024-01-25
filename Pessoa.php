<?php
abstract class Pessoa {
    protected string $nome;
    protected int $idade;
    

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
      
    }

    abstract public function getInfo();

}
