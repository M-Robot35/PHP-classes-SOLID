<?php

// @ FORMATA AS QUARY PARA ADAPTAR AOS TABELAS
class DbExecute 
{   
    private static string $table;
    protected static array $schema;
    
    private static string $bindPrepare;
    private static string $keyPrepare;

    function __construct(string $table, array $schema)
    {
        self::$table= $table;
        self::$schema = $schema;

        self::$bindPrepare = $this->arrayBind($schema);
        self::$keyPrepare = $this->arrayKey($schema);
    }

    // @ CRIA UMA LISTA COM O NOME DOS ARRAYS E AS UNE
    protected function arrayKey(array $keys):string
    {
        $prepareKey = array();

        foreach ($keys as $key => $value) {
            $insertArray =  $key ;
            $prepareKey[$key]= $insertArray;
        }         
        return join(",", $prepareKey);
    }

    // @ CRIA UMA LISTA COM O NOME COM BIND [:] DE CADA ITEM DOS ARRAYS E AS UNE
    protected function arrayBind(array $bind):string
    {
        $prepareBind = array();

        foreach ($bind as $key => $value) {
            $insertArray =  ":". $key;
            $prepareBind[$key]= $insertArray;
        }    
        return join(",", $prepareBind);
    }

    // @ PREPARA QUERY PRA INSERIR UM VALOR NA TABELA
    public function queryInsert():string
    {
        // faz toda a query para ser inserida
        $query = "
        INSERT INTO ".self::$table."(".self::$keyPrepare.", criacao) VALUES(".self::$bindPrepare.", NOW());
        ";
        return $query;
    }    

    // @ PERSONALIZAR PARA FICAR DINAMICO
    function queryCreateTable():string
    {           
        $prepare = join(",", self::$schema);        

        $query = "
            CREATE TABLE IF NOT EXISTS ".self::$table." ( ". $prepare .",criacao DATETIME);       
        ";
        return $query;
    }

    function querySelectAll(){
        $query = "
        SELECT * FROM ".self::$table.";
        ";
        return $query;
    }
}


// faz connexão com o banco de dados e executa as query
class ConnexaoBdPlus extends DbExecute
{
    protected $root='localhost';
    protected $user='root';
    protected $pass='';
    protected $db_name='pessoa';
    protected $port='3306';

    // @connexao
    protected  $conn;

    function __construct(string $table, array $schema=[])
    {
        parent::__construct($table, $schema);
        $this->conn = $this->connxao();
    }

    // @ CONNEXÃO COM BANCO DE DADOS
    public function connxao(){
        try{
            $conn = new PDO("mysql:root=$this->root;dbname=". $this->db_name, $this->user , $this->pass); 
            return $conn;

        }catch(PDOException $err){
            echo "ERROR: Connexão com o banco de dados não realizada" . $err->getMessage();
            die("BD_ERROR: " . $this->db_name);
        }
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

    }

    // @ RETORNA UM ARRAY COM TODAS AS PROPRIEDADES
    function selectAll()
    {   

        $executarQuery = $this->querySelectAll();
        $result = $this->conn->prepare($executarQuery);
        $result->execute();

        if (($result) and ($result->rowCount() != 0)){
            
            while($row_usuarios = $result->fetch(PDO::FETCH_ASSOC)){
                var_dump($row_usuarios);
                $dados[] = [
                    "dado"=> $row_usuarios['nome'],

                ];
            };
            return $retorno = ["error"=> false, "msg"=> "Úsuarios listados"];
        }else{
            $retorno = ["error"=> true, "msg"=> "Nem um úsuario encontrado"];
        }

    }    
}


