<?php
class Livro {

private string $titulo;
private string $autor;
private ?int $paginas;

    public function __construct(

        string $valorDoTitulo,
        string $valorDoAutor,
        ?int $valorDaPagina = null
    
    ){
      
        $this->setTitulo ($valorDoTitulo);
        $this->autor = $valorDoAutor;
        $this->setPaginas ($valorDaPagina);
        
    }

    public function getTitulo():string {

        return $this->titulo;

    }

    public function getAutor():string {

        return $this->autor;

    }

    public function getPaginas():?int {

        return $this->paginas;

    }

    private function setTitulo(string $valorDoTitulo):void{

        if((mb_strlen($valorDoTitulo) <= 30 )){
            echo "<p style='color:red'>Titulo não pode ser menor que 30</p>";
        }

        $this->titulo = $valorDoTitulo;

    }

    private function setPaginas(?int $valorDaPagina):void {

        if(empty($valorDaPagina)){

            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'>Nome não pode ser vazio</p>";
        } 

            // Senão, pegamos o valor do nome e colocamos no atributo do objeto
            $this->paginas = $valorDaPagina;

    }

};

?>
