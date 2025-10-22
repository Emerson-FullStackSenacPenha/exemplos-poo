<?php
class Livro {

public string $titulo;
public string $autor;
public ?int $paginas;

    public function __construct(

        string $valorDoTitulo,
        string $valorDoAutor,
        ?string $valorDaPagina = null
    
    ){
      
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->paginas = $valorDaPagina;
        
    }



    public function verificarTitulo(): void {

        if (mb_strlen($this->titulo) < 3 ) {
            echo '<p style="color: red;"> Titulo não pode ter menos do que 3 letras </p>';
        }

    }

};

?>


<!-- public function mostrarDados():void {

        echo "  <div>
        
                <p> O livro <b>$this->titulo</b>, tem em torno de  <i>$this->paginas</i> páginas.

                </div>";

    } -->

