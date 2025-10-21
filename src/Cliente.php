<?php

class Cliente {

    /* Atributos da clase: Representam caracteristicas que os objetos deverão ter
    */

    public string $nome;
    public int $idade;
    public string $email;
    
    /* Método responsável por exibir dados de um objeto */

    public function mostrarDados(){
        
        echo "  <div>
                    <h4> NOME DO CLIENTE </h4>
                    <p><b>E-mail de contato:</b> EMAIL DO CLIENTE </p>
                    <p><b>Idade:</b> IDADE DO CLIENTE anos </p>
                </div>";
        
        }   

};

?>