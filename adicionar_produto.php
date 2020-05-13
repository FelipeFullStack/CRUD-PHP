<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Cadastro Dois</title>
    <link rel="stylesheet" href="css/adicionar_produto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
</head>
    <body>
        <Div class="container" id="tamanhoContainer">
            <h4>Formulário de Cadastro</h4>
            <form action="_inserir_produto.php" method="post">
                    <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" placeholder= "insira o numero do produto" autocomplete="off" required >
                    
                </div>

                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder= "insira o nome do produto" autocomplete="off" required>
                    
                </div>

                <div>
                    <div class="form-group">
                        <label >Categoria</label>
                        <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                        </select>
                    </div>
                </div>     

                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" placeholder= "insira a quantidade" autocomplete="off" required>
                    
                </div>

                
                <div>
                    <div class="form-group">
                        <label >Fornecedor</label>
                        <select class="form-control" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                        <option>Fornecedor D</option>
                        </select>
                    </div>
                </div>    
                    <div class="botaoForm">
                        <a href="index.php" role= "button" class="btn btn-info btn-sm" >Voltar</a>
                        <button type="submit" class="btn btn-sm" id="botaoCadastro" >Cadastrar</button>   
                    </div>
            </form>
        </Div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>