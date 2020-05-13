<?php

include 'conexao.php';

$id = $_POST['id'];
// $nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor'
WHERE id_estoque =$id";

$atualizar = mysqli_query($conexao,$sql);   
 
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
<link rel="stylesheet" href="css/_atualizar_produto.css">


<div class="container" >
    <center>
        <h3>Atualizado com sucesso</h3>
        <a href="listar_produto.php" class="btn btn-warnig btn-sm " id="button">Voltar</a>
    </center>

</div>