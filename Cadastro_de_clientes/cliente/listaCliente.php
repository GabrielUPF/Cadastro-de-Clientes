<?php require_once('../header.php'); ?>
<div class="container">
  <center><h1>Lista de Clientes</h1></center>
  <a class="btn btn-info" href="controladorCliente.php?acao=novo">
    <i class="glyphicon glyphicon-plus"></i> Adicionar</a><br></br>
  <table class="table table-striped table-hover">
    <th>#</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Editar</th>
    <th>Excluir</th>
    <?php foreach($dados as $p){ ?>
             <tr>
                <td><?= $p['id']; ?></td>
                <td><?= $p['nome']; ?></td>
                <td><?= $p['email']; ?></td>
                <td><?= $p['telefone']; ?></td>
                <td>
                  <a class="btn btn-info" href="controladorCliente.php?acao=buscar&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                </td>
                <td>
                  <a class="btn btn-danger" href="controladorCliente.php?acao=excluir&id=<?= $p['id']; ?>">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
                </td>
             </tr>
    <?php } ?>
  </table>
</div>
<?php require_once('../footer.php'); ?>
