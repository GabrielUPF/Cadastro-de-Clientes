<?php

    //Criacação de uma instância de objeto,
    //passando como par a string de conexão, o usuário e a senha
    try{
      $con = new PDO("mysql:host=localhost;dbname=ads", 'root', '');
    }catch(PDOExcepetion $e){
      echo 'Falha na COnexão: ' . $e->getMessage();
    }

    $cliente = $_POST;
    // var_dump($pessoa); exit;
    $sql = "UPDATE cliente SET nome=:nome, cpf=:cpf, email=:email, telefone=:telefone, cidade=:cidade, rua=:rua, 
    numero=:numero, bairro=:bairro, complemento=:complemento"
            . " WHERE id= :id";
    $query = $con->prepare($sql);
    $resposta = $query->execute($cliente);
    if($resposta==true){
      header('location: lista.php');
    }else{
      echo "Erro ao tentar atualizar os dados da Pessoa";
    }