<?php

if ( isset($_POST['botao']) ){
    
 include_once '../model/crud.php' ;   

$email= $_POST['email'];
$nome= $_POST['nome'];
$telefone= $_POST['telefone'];
$desejo= $_POST['novidades'];
$senha = $_POST['senha'];
$confirma = $_POST['Confirma'];
$mensagem= $_POST['mensagem'];



$inserir = new crud();

$inserir->inserir_Usuario($email, $nome, $telefone, $desejo, $senha, $confirma, $mensagem);
       

}