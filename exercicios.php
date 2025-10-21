<?php
require_once "src/Livro.php";

$livroA = new Livro();
$livroB = new Livro();
$livroC = new Livro();

$livroA->titulo = "O Senhor dos Anéis: A Sociedade do Anel";
$livroA->autor = "J.R.R. Tolkien";
$livroA->paginas = 480;

$livroB->titulo = "O Senhor dos Anéis: As Duas Torres";
$livroB->autor = "J.R.R. Tolkien";
$livroB->paginas = 400;

$livroC->titulo = "O Senhor dos Anéis: O Retorno do Rei";
$livroC->autor = "J.R.R. Tolkien";
$livroC->paginas = 420;

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

<?=$livroA->mostrarDados()?>
<?=$livroB->mostrarDados()?>
<?=$livroC->mostrarDados()?>

<p>E ambos livros é do autor <b><?=$livroA->autor?></b>.</p>

</body>
</html>