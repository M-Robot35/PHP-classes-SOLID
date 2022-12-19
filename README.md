# PHP-classes-SOLID
Treinando POO  

Implementação de classes Funcionario, Cliente, podem extender para mais funcionalidades sem  precisar modificar muitos methods

EXEMPLOS:

// CRIAR TABELA
-------------------------------------
-------------------------------------
@ OBRIGATORIO COLOCAR O TIPO

$queryCreate= [
    "id INT PRIMARY KEY AUTO_INCREMENT",
    "nome VARCHAR(255) UNIQUE",
    "idade INT",
    "salario FLOAT", 
    "escolaridade VARCHAR(255)"
];

% <!-- PARAMETROS nome da tabela:string // dados: array -->
$casa = new ConnexaoBdPlus("estudante", $queryCreate);
$casa->createTable();


// INSERIR DADOS NO BD
------------------------------------------
------------------------------------------
% array com @ NOME DA COLUNA + VALOR
$tenso = array(
    "nome"=> "thiago teles",
    "sobrenome"=> "qualquer",
    "titulo"=> "meudeus",
);

<!-- PARAMETROS nome da tabela:string // dados: array -->
$casa = new ConnexaoBdPlus("estudante", $queryCreate);
$casa->insertInto();


// SELECIONA TODOS OS DADOS DO BD
------------------------------------------
------------------------------------------

% <!-- PARAMETROS nome da tabela:string -->
$casa = new ConnexaoBdPlus("aluno");
$casa->selectAll();