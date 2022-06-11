
   <?php

require "conectarr.php";

 session_start(); 

class crud {

  function inserir( $distino,$titulo_trecho,$trecho,$te){ 

    $conn= conectar();   
 
    $sql = "INSERT INTO frete(nome,loca,distino,telefone)values( '$distino','$titulo_trecho','$trecho','$te')";
 
     mysqli_query($conn,$sql);   

     echo"<script language='javascript' type='text/javascript'>alert('Frete Cadastrado com sucesso');window.location.href='../View/usuario.php';</script>";
 
   }
  }