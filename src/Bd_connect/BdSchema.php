<?php



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

    public function queryInsert():string
    {
        // faz toda a query para ser inserida
        $query = "
        INSERT INTO ".self::$table."(".self::$keyPrepare.", create) VALUES(".self::$bindPrepare.", NOW());
        ";
        return $query;
    }    

    // @ PERSONALIZAR PARA FICAR DINAMICO
    function queryCreateTable():string
    {   
        // $query = "
        // CREATE TABLE Persons (
        //     PersonID int PRIMARY KEY AUTO_INCREMENT,
        //     LastName varchar(255),
        //     FirstName varchar(255),
        //     Address varchar(255),
        //     City varchar(255),
        //     create DATETIME
        // );        
        // ";

        $query = "
        CREATE TABLE " . self::$table . " (
            ID int PRIMARY KEY AUTO_INCREMENT,
            " . self::$keyPrepare . "
            create DATETIME
        );        
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