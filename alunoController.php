<?php
// Inclui o arquivo 'Aluno.php' que contém a definição da classe Aluno.
// Isso permite usar a classe Aluno dentro deste arquivo.
require_once 'Aluno.php';

// Inclui o arquivo 'alunosView.php' que contém a função exibirAlunos().
// Isso permite usar a função responsável por mostrar a lista de alunos na tela.
require_once 'alunosView.php';

// Declaração da classe AlunoController.
// Essa classe é responsável por "controlar" a comunicação entre o modelo (Aluno) e a visualização (alunosView).
class AlunoController {

    // Criação de uma propriedade privada chamada $model.
    // Ela será usada para armazenar uma instância da classe Aluno.
    private $model;

    // Método construtor da classe. É chamado automaticamente quando um objeto da classe AlunoController é criado.
    public function __construct() {
        // Cria uma nova instância da classe Aluno e armazena na propriedade $model.
        $this->model = new Aluno();
    }

    // Método público chamado listar.
    // Ele serve para buscar a lista de alunos e passar para a view.
    public function listar() {
        // Chama o método listarAlunos() do modelo e armazena o resultado na variável $alunos.
        $alunos = $this->model->listarAlunos();

        // Chama a função exibirAlunos (que está na view) e envia a lista de alunos para ser exibida no navegador.
        exibirAlunos($alunos);
    }
}

// Execução do código:
// Aqui, fora da classe, é criado um objeto do tipo AlunoController.
$controller = new AlunoController();

// Após criar o objeto, é chamado o método listar().
// Isso faz com que o controlador pegue os dados dos alunos e chame a função que exibe eles no navegador.
$controller->listar();
?>