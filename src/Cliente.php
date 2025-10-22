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
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
        $this->telefone = $valorDoTelefone;
    }

};

?>