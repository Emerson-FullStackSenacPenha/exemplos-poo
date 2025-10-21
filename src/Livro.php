<?php
class Livro {

public string $titulo;
public string $autor;
public int $paginas;

public function mostrarDados():void {

    echo "  <div>
    
            <p> O livro <b>$this->titulo</b>, que tem <i>$this->paginas</i> páginas, é do autor <u>$this->autor</u>.</p>
        
            </div>";

}




};

?>