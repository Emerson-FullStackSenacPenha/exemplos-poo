<?php

class Cliente {

    public string $nome;
    public int $idade;
    public string $email;

    // Telefone é opcional, ou seja, caso não seja informado, ficara valendo null
    public ?string $telefone;

    // ? indica que este atributo PODE ser null

    /* Método construtor: Responsável por 'construir' um objeto COM seus dadso no momento da criação*/

    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null
        // Por padrão, o valor é nulo
        ){
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
        $this->telefone = $valorDoTelefone;
    }

};

?>