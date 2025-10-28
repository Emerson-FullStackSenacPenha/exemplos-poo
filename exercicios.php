<?php
require_once "src/Livro.php";

$livroA = new Livro("A Sociedade do Anel", "J.R.R. Tolkien", 250);
$livroB = new Livro("2🗼", "J.R.R. Tolkien");
$livroC = new Livro("O Retorno do Rei", "J.R.R. Tolkien", 420);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de PHP com POO</title>
</head>
<body>
    
<h1>Exercicio de mostrar livros através de PHP com POO</h1>

<h2>Os livros de <b>O Senhor dos Anéis</b> são:</h2>

<ol>

    <li> <?=$livroA->getTitulo()?>, com <?=$livroA->getPaginas() ?? "<b>não informado o nº de</b>"?> páginas </li>
    <li> <?=$livroB->getTitulo()?>, com <?=$livroB->getPaginas() ?? "<b>não informado o nº de</b>"?> páginas </li>
    <li> <?=$livroC->getTitulo()?>, com <?=$livroC->getPaginas() ?? "<b>não informado o nº de</b>"?> páginas </li>
    
</ol>

<p>E ambos livros é do autor <b><?=$livroA->getAutor()?></b>.</p> 

</body>
</html>
