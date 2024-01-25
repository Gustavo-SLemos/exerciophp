<?php
class Disciplina {
    public $nome;
    public $cargaHoraria;
    public $professor;
    public $alunos;

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

$listaAlunosQuimica = array("Alice", "Bob", "Charlie");//trocar pelos objetos alunos

$quimica = new Disciplina("Química", 60, "Professor Silva", $listaAlunosQuimica);

echo"\n\n";
echo $quimica->getInfo();
echo"\n\n";