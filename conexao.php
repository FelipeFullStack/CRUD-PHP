<?php

$servename = "localhost"; //padrao - server local
$database = "formulario_estoque"; //alterar conforme o nome do seu banco de dados 
$username = "root";//padrão - root
$password = "";//senha de conexão do banco de dados

// Criação de conexão
$conexao = mysqli_connect($servename, $username, $password, $database);


?>