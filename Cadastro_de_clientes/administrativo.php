<?php require_once('./header.php'); ?>
<?php define('APP_PATH', 'http://localhost/Cadastro_de_clientes'); ?>
<body>
    <div class="container">
    <form id="form2" method="post">
        <div id="form2" class="col-sm-12"> <br></br>
          <br></br><br></br>
        <center><h1><p> CADASTRO DE CLIENTES</p></h1></center>
    <br></br><br></br></br><br>
    </div>
    </form>
    <center>    <a href="<?= APP_PATH ?>/cliente/controladorCliente.php?acao=novo">
            <button class="btn btn-primary">CADASTRAR CLIENTES</button>
    </a><br></br>
    <a href="<?= APP_PATH ?>/cliente/controladorCliente.php">
            <button class="btn btn-primary">LISTA DE CLIENTES</button>
    </a></center>
   
</div> </br> </br> </br>
  </body>
  <?php require_once('./footer.php'); ?>