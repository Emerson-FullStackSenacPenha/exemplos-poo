<?php
class Livro {

public string $titulo;
public string $autor;
public int $paginas;

    public function mostrarDados():void {

        echo "  <div>
        
                <p> O livro <b>$this->titulo</b>, tem em torno de  <i>$this->paginas</i> páginas.

                </div>";

    }

};

?>
