<?php

/*1- uma faculdade possui disciplina, onde cada aula possui um professor e N alunos.
2- Cada aluno tem nome, idade, matricula e notas(array de float).
3- Cada professor tem nome, idade e disciplinas(array de objeto).
4- Cada disciplina tem nome, carga horária, professor e alunos(array de obejtos).
5- Salvar esses dados em um arquivo JSON conforme hierarquia de dados. */

require_once 'Aluno.php';
require_once 'Professor.php';




$aluno1 = new Aluno("Gustavo", 40, 1000, [8.5, 9.8, 10.0]);
