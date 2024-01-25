<?php

//3- Cada professor tem nome, idade e disciplinas(array de objeto).

class Professor
{
    public string $nome;
    public int $idade;
    public array $disciplinas;

    public function __construct(string $nome, int $idade, array $disciplinas)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->disciplinas = $disciplinas;
    }
}