<?php
require_once "src/Livro.php";

$livroA = new Livro();
$livroB = new Livro();
$livroC = new Livro();

$livroA->titulo = "Cem Anos de Solidão";
$livroA->autor = "Gabriel García Márquez";
$livroA->paginas = 448;

$livroB->titulo = "Ensaio Sobre a Cegueira";
$livroB->autor = "José Saramago";
$livroB->paginas = 312;

$livroC->titulo = "O Pequeno Príncipe";
$livroC->autor = "Antoine de Saint-Exupéry";
$livroC->paginas = 96;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio do Livro</title>
</head>
<body>
    
<h1>Exercicio de mostrar livros através de PHP com POO</h1>

<?=$livroA->mostrarDados()?>
<?=$livroB->mostrarDados()?>
<?=$livroC->mostrarDados()?>

</body>
</html>