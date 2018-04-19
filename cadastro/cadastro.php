<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h4>Cadastro de Clientes</h4></li>
        </ol>
    </nav>
  </head>

  <body>
    <div class="container">
    <div class="row">
    <form action="gravar.php" method="post">
        <div class="col-sm-6"> 
        <h3>Dados Pessoais</h3>
        
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" style="width:400px" class="form-control" id="nome" name="nome" required>
        </div>
        
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" style="width:300px" class="form-control" maxlength="14" id="cpf" placeholder="Ex.: 000.000.000-00" name="cpf" required>
        </div>
        </br>
        <h3>Contato</h3>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" style="width:400px" class="form-control" id="email" placeholder="Ex.: contato@exemplo.com" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" style="width:300px" class="form-control" maxlength="16" id="telefone" placeholder="Ex.: (00) 0 0000-0000" name="telefone" required>
        </div>
        </br>
        </div>
        <div class="col-sm-6">
        <h3>Endereço</h3>
        
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" style="width:350px" class="form-control" id="cidade" name="cidade" required>
        </div>
        
        <div class="form-group">
            <label for="rua">Rua</label>
            <input type="text" style="width:350px" class="form-control" id="rua" name="rua" required>
        </div>

        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" style="width:100px" class="form-control" id="numero" name="numero" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" style="width:250px" class="form-control" id="bairro" name="bairro" required>
        </div>
        
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" style="width:250px" class="form-control" id="complemento" name="complemento" required>
        </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
        <a href="http://localhost/cadastro/lista.php">
            <button class="btn btn-primary">Lista de Clientes</button>
        </a>
    </div> </br> </br> </br>
  </body>
  <footer class="footer" style="text-align: center;">
        <div class="container">
            <span class="text-muted"><h6>Engenharia de Software II - 2018 | Todos os direitos reservados.</h6></span>
        </div>
    </footer>
</html>