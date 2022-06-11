<?php

if ( isset($_POST['acao']) ){
    
 include_once '../model/insira.php' ;   
 
 $distino= $_POST["nome"];
 $titulo_trecho= $_POST["titulo_trecho"];
 $trecho = $_POST["trecho"];
 $te = $_POST["telefone"];


$inserir = new crud();

$inserir->inserir($distino, $titulo_trecho,$trecho,$te); 
 
 


}