<?php
// Define uma classe chamada Aluno
class Aluno {

    // Cria uma propriedade privada chamada $alunos.
    // Essa propriedade é um array que armazena dados de alunos.
    // Cada aluno é representado como um array associativo com nome e idade.
    private $alunos = [
        ['nome' => 'João', 'idade' => 16],
        ['nome' => 'Maria', 'idade' => 17],
        ['nome' => 'Carlos', 'idade' => 15]
    ];

    // Define um método público chamado listarAlunos.
    // Esse método serve para "retornar" (ou seja, entregar) o conteúdo do array $alunos.
    public function listarAlunos() {
        return $this->alunos;
    }
}
?>
