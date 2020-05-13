<?php

    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
    $deletar = mysqli_query($conexao,$sql)

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
<link rel="stylesheet" href="css/deletar_produto.css">


<div class="container" >
    <center>
        <h3>Deletado com sucesso</h3>
        <a href="listar_produto.php" class="btn btn-warnig btn-sm " id="button">Voltar</a>
    </center>

</div>