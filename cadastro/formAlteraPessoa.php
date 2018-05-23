<?php

    //Criacação de uma instância de objeto,
    //passando como par a string de conexão, o usuário e a senha
    try{
      $con = new PDO("mysql:host=localhost;dbname=ads", 'root', '');
    }catch(PDOExcepetion $e){
      echo 'Falha na COnexão: ' . $e->getMessage();
    }

    $sql    = "SELECT * FROM cliente WHERE id=".$_GET['id'];
    $query  = $con->query($sql);
    $cliente = $query->fetch();//transforma a linha do banco de dados em array
    //var_dump($cliente); exit;


?>
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
</head>
<body>

<div class="container">
  <div class="row">
  <h2>Cadastro de Clientes</h2>
  <form name="form1" action="editar.php" method="POST">
    <div class="col-sm-6"> 
        <h3>Dados Pessoais</h3>
        
        <div class="form-group">
            <label for="id">Id:</label>
            <input type="text" class="form-control" id="id"
         name="id" value="<?= $cliente['id']; ?>" readonly>
        </div>
        
        <div class="form-group">
            <label for="nome">Nome*</label>
            <input type="text" style="width:400px" class="form-control" id="nome" name="nome" 
            value="<?= $cliente['nome']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF*</label>
            <input type="text" style="width:400px" class="form-control" name="cpf" onBlur="validarcpf(form1.cpf);" id="cpf" 
            value="<?= $cliente['cpf']; ?>" required>
        </div>
        </br>
        <h3>Contato</h3>
        
        <div class="form-group">
            <label for="email">E-mail*</label>
            <input type="text" style="width:400px" class="form-control" id="email" placeholder="Ex.: contato@exemplo.com" name="email" 
            value="<?= $cliente['email']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone*</label>
            <input type="text" style="width:300px" class="form-control" maxlength="16" id="telefone" placeholder="Ex.: (00) 0 0000-0000" name="telefone" value="<?= $cliente['telefone']; ?>"required>
        </div>
        </br>
        </div>
        <div class="col-sm-6">
        <h3>Endereço</h3>
        
        <div class="form-group">
            <label for="cidade">Cidade*</label>
            <input type="text" style="width:350px" class="form-control" id="cidade" name="cidade" value="<?= $cliente['cidade']; ?>"required>
        </div>
        
        <div class="form-group">
            <label for="rua">Rua*</label>
            <input type="text" style="width:350px" class="form-control" id="rua" name="rua" value="<?= $cliente['rua']; ?>" required>
        </div>

        <div class="form-group">
            <label for="numero">Número*</label>
            <input type="number" style="width:100px" class="form-control" id="numero" name="numero" value="<?= $cliente['numero']; ?>" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" style="width:250px" class="form-control" id="bairro" name="bairro" value="<?= $cliente['bairro']; ?>">
        </div>
        
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" style="width:250px" class="form-control" id="complemento" name="complemento" value="<?= $cliente['complemento']; ?>">
        </div> 
    </div>
    <h3><p> (*) Campos Obrigatórios </p></h3>
    </div>
    <button type="submit" class="btn btn-primary glyphicon glyphicon-check"> CADASTRAR</button>
  </form>
</div>

</body>
</html>
