<?php

//2- Cada aluno tem nome, idade, matricula e notas(array de float).

class Aluno
{
    public string $nome;
    public int $idade;
    public int $matricula;
    public array $notas;


public function __construct(string $nome, int $idade, int $matricula, array $notas)
{
    $this->nome = $nome;
    $this->idade = $idade;
    $this->matricula = $matricula;
    $this->notas = $notas;
}
}