<?php
try{
  $con = new PDO("mysql:host=localhost; dbname=ads", 'root', '');
}
catch(PDOException $e){
  echo 'Falha na conexão: ' . $e->getMessage();
}

if(isset($_GET['acao']) && $_GET['acao']=='excluir'){
        $sql = "DELETE FROM cliente WHERE id=".$_GET['id'];
        $query = $con->query($sql);
  }

  $sql = "SELECT * FROM cliente";
  $query = $con->query($sql);
  $clientes = $query->fetchAll();

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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><h4>Lista de Clientes</h4></li>
        </ol>
    </nav>  
  </head>

  <body>
  <div class="container">
    <h2> Lista de Clientes </h2>
    <a class="btn btn-info" href="cadastro.php">
    <i class="glyphicon glyphicon-plus"></i> Adicionar</a>
    </br> </br>
    <table class="table table-striped table-hover">
      <th>#</th>
      <th>Nome</th>
      <th>CPF</th>
      <th>E-mail</th>
      <th>Telefone</th>
      <th>Cidade</th>
      <th>Excluir</th>
      <th>Editar</th>

      <?php foreach($clientes as $p){ ?>
        <tr>
          <td><?= $p['id']; ?>          </td>
          <td><?= $p['nome']; ?>        </td>
          <td><?= $p['cpf']; ?>         </td>
          <td><?= $p['email']; ?>       </td>
          <td><?= $p['telefone']; ?>    </td>
          <td><?= $p['cidade']; ?>      </td>
          <td>
            <a class="btn btn-danger" href="lista.php?acao=excluir&id=<?= $p['id']; ?>">
              <i class="glyphicon glyphicon-trash"></i>
            </a>
          </td>
          <td>
            <a class="btn btn-info" href="formAlteraPessoa.php?acao=editar&id=<?= $p['id']; ?>">
              <i class="glyphicon glyphicon-edit"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </table>
    </div>
  </body>
</html>
