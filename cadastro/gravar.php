<?php

$nome        = $_POST['nome'];
$cpf         = $_POST['cpf'];
$email       = $_POST['email'];
$telefone    = $_POST['telefone'];
$cidade      = $_POST['cidade'];
$rua         = $_POST['rua'];
$numero      = $_POST['numero'];
$bairro      = $_POST['bairro'];
$complemento = $_POST['complemento'];

try{
	$con = new PDO("mysql:host=localhost; dbname=ads", 'root', '');
}
catch(PDOException $e){
	echo 'Falha na conexão: ' . $e->getMessage();
}

$sql = "INSERT INTO cliente(nome, cpf, email, telefone, cidade, rua, numero, bairro, complemento) VALUES(:nome, :cpf, :email, :telefone, :cidade, :rua, :numero, :bairro, :complemento)";
$cliente = array('nome'=>$nome, 'cpf'=>$cpf, 'email'=>$email, 'telefone'=>$telefone, 'cidade'=>$cidade, 'rua'=>$rua, 'numero'=>$numero, 'bairro'=>$bairro, 'complemento'=>$complemento);

$query = $con->prepare($sql);
echo ($query->execute($cliente))?  header("Location: lista.php") : "Erro ao cadastrar!";

?>