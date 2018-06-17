<?php

    require_once '../classeConexao.php';

    $acao = NULL;

    if( !isset($_GET['acao']) ) $acao='listar';
    else $acao = $_GET['acao'];

    //instancia do objeto do tipo Conexao
    $con = new Conexao();
    // var_dump($con); exit;

    if($acao=='listar'){
        $consulta="SELECT * FROM cliente";
        $dados = $con->getLista($consulta);
        require_once ('listaCliente.php');
    }
    else if($acao=='excluir'){
        $id  = $_GET['id'];
        $sql = "DELETE FROM cliente WHERE id = :id";
        $dados  = array('id'=>$id);
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCliente.php');
        else echo "Você não pode excluir este cliente, pois ele está com empréstimo de um livro. Volte e exclua o empréstimo antes.";
    }
    else if($acao=='novo'){
        $acaoForm = "controladorCliente.php?acao=cadastrar";
        require_once('formCliente.php');
    }
    else if($acao=='cadastrar'){
        $dados  = $_POST;
        $sql    =  "INSERT INTO cliente(nome, email, telefone, cidade, numero, rua, bairro, complemento, cpf) "
                 . " VALUES(:nome, :email, :telefone, :cidade, :numero, :rua, :bairro, :complemento, :cpf)";
        $result = $con->executaQuery($sql, $dados);
        if($result==true) header('location: controladorCliente.php');
        else echo "Deu ruim :(";
    }
    else if($acao=='buscar'){
        $id     = $_GET['id'];
        $sql    = "SELECT * FROM cliente WHERE id = :id";
        $chave  = array('id'=>$id);
        $cliente = $con->getRegistro($sql, $chave);

        //
        $acaoForm = "controladorCliente.php?acao=atualizar&id=".$id;
        require_once('formCliente.php');
    }

    else if($acao=='atualizar'){
        $cliente = $_POST;
        $sql = "UPDATE cliente SET nome= :nome, email = :email, telefone = :telefone, cidade=:cidade, numero=:numero, rua=:rua, bairro=:bairro, complemento=:complemento, cpf=:cpf "
               . " WHERE id = :id";
        $result = $con->executaQuery($sql, $cliente); 
        if($result==true) header('location: controladorCliente.php');
      else echo "Deu ruim :("; 
    }

?>
