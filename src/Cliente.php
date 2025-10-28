<?php

class Cliente {
    /* Atributos privado NÃO PODEM SER ACESSADOS/MODIFICADOS fora da própria classe em que estão declarados. */
    private string $nome;
    private int $idade;
    private string $email;
    private ?string $telefone;

    public function __construct( 

        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null
        
        ){

        $this->setNome ($valorDoNome);
        $this->setIdade ($valorDaIdade);
        $this->setEmail ($valorDoEmail);
        $this->telefone = $valorDoTelefone;

    }

    /* Métodos getters, getNome "recomendação de boas práticas */

    public function getNome():string {

        return $this->nome;

    }

    public function getIdade():int {

        return $this->idade;

    }

    public function getEmail():string {

        return $this->email;

    }

    public function getTelefone():?string {

        return $this->telefone;

    }

    /* Métodos setters: permitem acesso de escrita para definir valores de acordo com alguma regra/validação. */
    private function setNome(string $valorNome):void {

        // Se nome estiver vazio
        if(empty($valorNome)){

            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'>Nome não pode ser vazio</p>";
        } else {

            // Senão, pegamos o valor do nome e colocamos no atributo do objeto
            $this->nome = $valorNome;

        }

    }

    private function setEmail(string $valorEmail):void {

        /* Usamos o filter_var com a constante FILTER_VALIDADE_EMAIL para o PHP verificar se o valor do e-mail informado é valido. Se sim, retorna TRUE, se não, retorna FALSE. */
        $validaEmail = filter_var($valorEmail, FILTER_VALIDATE_EMAIL);

        // Se o e-mail não for válido
        if(!$validaEmail){

            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'>E-mail invalido</p>";

        } else {

            // Senão, atribui ao atributo
            $this->email = $valorEmail;

        }

    }

    private function setIdade(string $valorDaIdade):void {

        if($valorDaIdade < 0){

            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'>Idade não pode ser negativa!</p>";

        } 

        $this->idade = $valorDaIdade;

    }



};

?>
