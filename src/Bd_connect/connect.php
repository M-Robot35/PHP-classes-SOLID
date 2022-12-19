<?php
require_once "./BdSchema.php";


class ConnexaoBdPlus extends DbExecute
{
    protected $root='localhost';
    protected $user='root';
    protected $pass='';
    protected $db_name='pessoa';
    protected $port='3306';
    // @connexao
    protected  $conn;

    function __construct(string $table, array $schema)
    {
        parent::__construct($table, $schema);
        $this->conn = $this->connxao();
    }

    // @ CONNEXÃO COM BANCO DE DADOS
    public function connxao(){
        $conn = new PDO("mysql:root=$this->root;dbname=". $this->db_name, $this->user , $this->pass);
        return $conn;
    }

    // @ INSERE UM INTEM NA TABELA
    function insertInto(){
        $executarQuery = $this->queryInsert();
        $this->conn->prepare($executarQuery)->execute(self::$schema);
    }

    // @ CRIA UMA TABELA
    function createTable(){
        $executarQuery = $this->queryCreateTable();
        $this->conn->prepare($executarQuery)->execute();

        print_r($executarQuery);
        print_r('Sucesso!!!');
    }
    // @ RETORNA UM ARRAY COM TODAS AS PROPRIEDADES
    function selectAll():array
    {
        $executarQuery = $this->querySelectAll();
        $result = $this->conn->prepare($executarQuery);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }    
}


$tenso = array(
    "nome"=> "thiago teles 222",
    "sobrenome"=> "qualquer",
    "titulo"=> "meudeus",
);



$casa = new ConnexaoBdPlus("aluno", $tenso);
$casa->insertInto();




