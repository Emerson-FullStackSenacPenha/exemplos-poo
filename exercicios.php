<?php
require_once "src/Livro.php";

$livroA = new Livro("A Sociedade do Anel", "J.R.R. Tolkien");
$livroB = new Livro("2🗼", "J.R.R. Tolkien", 380);
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

    <li><?=$livroA->titulo?>, com <?=var_dump($livroA->paginas)?> páginas. <?=$livroA->verificarTitulo();?></li>
    <li><?=$livroB->titulo?>, com <?=$livroB->paginas?> páginas. <?=$livroB->verificarTitulo();?></li>
    <li><?=$livroC->titulo?>, com <?=$livroC->paginas?> páginas. <?=$livroC->verificarTitulo();?></li>

</ol>

<p>E ambos livros é do autor <b><?=$livroA->autor?></b>.</p> 
<hr>

<!-- Usamos um if para, se houver páginas (ou seja, não dfor null), faremos aparecer o parágrafo com o dado. -->
<?php if ($livroB->paginas): ?>
	<p>Texto: <?=$livroB->paginas?> </p>
<?php endif ?>

<!-- Aqui, usamos uma condicional if/else para mostrar parágrafos diferentes de acordo com a condição -->
<?php if ($livroA->paginas): ?>
	<p> Tem paginas </p>
<?php else: ?>
    <p style="color: red;"> Não tem páginas </p>
<?php endif; ?>

<!-- Tem páginas ? Mosta as páginas. 
 Não tem? Mostra o "Sem páginas" -->
<?=$livroA->paginas ?? "Sem páginas" ?>

</body>
</html>
