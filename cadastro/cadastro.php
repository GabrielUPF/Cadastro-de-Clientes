<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cadastro de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script language="JavaScript" type="text/javascript" src="validarcpf.js"></script>
    <script>
        $(document).ready(function () { 
            var $cpf = $("#cpf");
            $cpf.mask('000.000.000-00');
            
            var $telefone = $("#telefone");
            $telefone.mask('(00) 0 0000-0000');
        });
    </script>
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h4>Cadastro de Clientes</h4></li>
        </ol>
    </nav>
  </head>
  <body>
    <div class="container">
    <div class="row">
    <div class= text-right>
        <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#exampleModal">
  TUTORIAL
</button>
    </div>
    <form name="form1" action="gravar.php" method="post">
        <div class="col-sm-6"> 
        <h3>Dados Pessoais</h3>
        
        <div class="form-group">
            <label for="nome">Nome*</label>
            <input type="text" style="width:400px" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF*</label>
            <input type="text" style="width:400px" class="form-control" name="cpf" onBlur="validarcpf(form1.cpf);" id="cpf" required>
        </div>
        </br>
        <h3>Contato</h3>
        
        <div class="form-group">
            <label for="email">E-mail*</label>
            <input type="email" style="width:400px" class="form-control" id="email" placeholder="Ex.: contato@exemplo.com" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone*</label>
            <input type="text" style="width:300px" class="form-control" maxlength="16" id="telefone" placeholder="Ex.: (00) 0 0000-0000" name="telefone" required>
        </div>
        </br>
        </div>
        <div class="col-sm-6">
        <h3>Endereço</h3>
        
        <div class="form-group">
            <label for="cidade">Cidade*</label>
            <input type="text" style="width:350px" class="form-control" id="cidade" name="cidade" required>
        </div>
        
        <div class="form-group">
            <label for="rua">Rua*</label>
            <input type="text" style="width:350px" class="form-control" id="rua" name="rua" required>
        </div>

        <div class="form-group">
            <label for="numero">Número*</label>
            <input type="number" style="width:100px" class="form-control" id="numero" name="numero" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" style="width:250px" class="form-control" id="bairro" name="bairro" >
        </div>
        
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" style="width:250px" class="form-control" id="complemento" name="complemento">
        </div> 
    </div>
    <h3><p> (*) Campos Obrigatórios </p></h3>
    </div>
    <button type="submit" class="btn btn-primary glyphicon glyphicon-check"> CADASTRAR</button>
    </form>
        <a href="http://localhost/Cadastro_de_clientes/cadastro/lista.php">
            <button class="btn btn-primary">LISTA DE CLIENTES</button>
        </a>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LEIA ATENTAMENTE O PASSO A PASSO...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        1. Preencha os dados com as repectivas informações do cliente.<br>
        2. Após preencher todos os dados, clique no botão "CADASTRAR" para cadastrar o cliente.<br>
        3. Clique no botão "LISTA DE CLIENTES" para exibir todos os clientes cadastrados.<br>
        4. Se desejar excluir algum cliente, clique no botão excluir.<br>
        5. Se desejar fazer alguma alteração nos dados do cliente, clique no botão editar.<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar o Tutorial</button>
      </div>
    </div>
  </div>
</div>
    </div> </br> </br> </br>
  </body>
  <footer class="footer" style="text-align: center;">
        <div class="container">
            <span class="text-muted"><h6>Engenharia de Software II - 2018 | Todos os direitos reservados.</h6></span>
        </div>
    </footer>
</html>
