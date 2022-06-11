<?php

if ( isset($_POST['botao']) ){
    
 include_once '../model/crud.php' ;   

$email= $_POST['email'];
$senha = $_POST['senha'];

$inserir = new crud();

$inserir->selecionar_Usuario($email, $senha);
       

}