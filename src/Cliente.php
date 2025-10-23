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

};

?>