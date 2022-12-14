<?php 

abstract class Pessoa 
{
    protected string   $nome;
    protected int      $idade;
    protected float  $desconto;

    private static int $countNumeroPessoas= 0;
    protected Endereco $endereco;

    function __construct(string $nome, int $idade, Endereco $endereco)
    {
        $this->nome =     $nome;
        $this->idade =    $this->valida_idade($idade);
        
        $this->set_desconto();

        self::$countNumeroPessoas++;
        $this->endereco = $endereco;
    }

    // @ pouca ultilidade, usado apenas em alguns eventos expecificos
    public function __destruct()
    {
        self::$countNumeroPessoas--;

    }


    // @ methods GETes
    public function get_Nome():string {
    
        return $this->nome;
    }

    public function get_Idade():int {
        return $this->idade; 
    }
    
    public static  function get_numeroPessoas():int {
        return self::$countNumeroPessoas;
    }

    // @ methods SETTERS
    public function set_Nome(string $nome): void {
        $this->nome = $nome;
    }

    public function set_Idade(string $idade): void {
        $this->idade = $idade;
    }

    // Validações
    private function valida_idade(int $idade) {
        if ( $idade > 0 and $idade < 120){
            return $idade;
        }
        else{
            echo "Idade Invalida";
            exit;
        }
    }

    // methodo abstrato, quem herdar e OBRIGATORIO implementar esse methodo
    protected abstract function set_desconto():void;

    public function get_desconto():float
    {
        return $this->desconto;
    }

    public abstract function __toString():string;
        


}




