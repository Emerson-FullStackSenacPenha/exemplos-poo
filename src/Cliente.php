<?php

class Cliente {

    /* Atributos da clase: Representam caracteristicas que os objetos deverão ter
    */

    public string $nome;
    public int $idade;
    public string $email;
    
    /* Método responsável por exibir dados de um objeto */

    public function mostrarDados():void {
        
        echo "  <div>
                    <h4> $this->nome </h4>
                    <p><b>E-mail de contato:</b> $this->email </p>
                    <p><b>Idade:</b> $this->idade anos </p>
                </div>";
        
        }   

};

?>