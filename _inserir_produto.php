<?php

include 'conexao.php';


// recebe valor do atributo
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quatidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

// echo $nroproduto;
// echo $nomeproduto;
// echo $categoria;
// echo $quatidade;
// echo $fornecedor;

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
VALUES ($nroproduto,'$nomeproduto','$categoria',$quatidade,'$fornecedor')";

$inserir = mysqli_query($conexao,$sql);

?>


<!-- link do boostrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">

<link rel="stylesheet" href="css/_inserir_produto.css">


<link rel="stylesheet" href="css/_inserir_produto.css">

<div class="container">

    <h4>Produto Adicionado Com Sucesso!</h4>
    <div id="botao">
    <a href="adicionar_produto.php" role="button" class="btn btn-success">Cadastrar Novo Ìtem</a>
    </div>

</div> 























