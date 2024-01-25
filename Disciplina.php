<?php
class Disciplina {
    public string $nome;
    public int $cargaHoraria;
    public $professor;
    public array $alunos;

    public function __construct($nome, $cargaHoraria, $professor, $alunos) {
        $this->nome = $nome;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }

    public function getInfo() {
        return "Disciplina: {$this->nome}, Carga Horária: {$this->cargaHoraria}h, Professor: {$this->professor}, Alunos: " . implode(", ", $this->alunos);
    }
}

