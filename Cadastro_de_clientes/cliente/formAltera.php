<?php require_once('../header.php'); ?>
<?php define('APP_PATH', 'http://localhost/Cadastro_de_clientes'); ?>
<body>
<script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script> 
     <body>
    <div class="container">
        <div class="row">
        <div class= text-right>
        <button type="button" class="btn btn-primary glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#exampleModal">
  Tutorial
</button>
        </div>
        </div>
        <div class="container">
<h1>Cadastro de Clientes</h1>
  <form name="form1" action="<?php echo $acaoForm; ?>" method="POST">
    <?php if(isset($cliente)){ ?>
      <div class="form-group">
        <label for="id">Id:</label>
        <input type="text" style="width:400px" class="form-control" id="id" readonly
         name="id" value="<?php if(isset($cliente['id'])) echo $cliente['id']; ?>" required>
      </div>
    <?php    } ?>
    <div class="col-sm-6"> 
        <h3>Dados Pessoais</h3>
        <div class="form-group">
            <label for="nome">Nome*</label>
            <input type="text" style="width:400px" class="form-control" id="nome" name="nome"
            value="<?php if(isset($cliente['nome'])) echo $cliente['nome']; ?>" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF*</label>
            <input type="text" name="cpf" style="width:400px" class="form-control" onBlur="ValidarCPF(this.value);" 
onKeyPress="MascaraCPF(form1.cpf);" maxlength="11" 
            value="<?php if(isset($cliente['cpf'])) echo $cliente['cpf']; ?>" id="cpf" required>
        </div>
        </br>
        <h3>Contato</h3>
        
        <div class="form-group">
            <label for="email">E-mail*</label>
            <input type="email" style="width:400px" class="form-control" id="email" placeholder="Ex.: contato@exemplo.com"
            value="<?php if(isset($cliente['email'])) echo $cliente['email']; ?>" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone*</label>
             <input type="text" name="telefone" style="width:300px" class="form-control" onKeyPress="MascaraTelefone(form1.telefone);" 
maxlength="16"  onBlur="ValidaTelefone(form1.telefone);" 
            value="<?php if(isset($cliente['telefone'])) echo $cliente['telefone']; ?>"placeholder="Ex.: (00) 0 0000-0000" name="telefone" required>
        </div>
        </br>
        </div>
        <div class="col-sm-6">
        <h3>Endereço</h3>
        
        <div class="form-group">
            <label for="cidade">Cidade*</label>
            <input type="text" style="width:350px" class="form-control" id="cidade" name="cidade" 
            value="<?php if(isset($cliente['cidade'])) echo $cliente['cidade']; ?>"required>
        </div>
        
        <div class="form-group">
            <label for="rua">Rua*</label>
            <input type="text" style="width:350px" class="form-control" id="rua" name="rua"
            value="<?php if(isset($cliente['rua'])) echo $cliente['rua']; ?>" required>
        </div>

        <div class="form-group">
            <label for="numero">Número*</label>
            <input type="number" style="width:100px" class="form-control" id="numero" name="numero"
            value="<?php if(isset($cliente['numero'])) echo $cliente['numero']; ?>" required>
        </div>

        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text" style="width:250px" class="form-control" id="bairro" name="bairro"
            value="<?php if(isset($cliente['bairro'])) echo $cliente['bairro']; ?>" >
        </div>
        
        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" style="width:250px" class="form-control" id="complemento" name="complemento"
            value="<?php if(isset($cliente['complemento'])) echo $cliente['complemento']; ?>">
        </div> 
    </div>
    <h3><p> (*) Campos Obrigatórios </p></h3>
    </div>
    <button type="submit" class="btn btn-primary glyphicon glyphicon-check"> ALTERAR</button>
  </form>
  <a href="<?= APP_PATH ?>/cliente/controladorCliente.php">
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
    </footer><?php require_once('../footer.php'); ?>
