<?php

require "conectarr.php";

 session_start(); 

class crud {    

 function inserir_usuario($email, $nome, $telefone, $desejo, $senha, $confirma, $mensagem){
 

   $conn= conectar();   

   $pegaEmail = mysqli_query($conn, "SELECT * FROM cadastro_geral WHERE email = '$email'");	
	
	if(mysqli_num_rows($pegaEmail) ==1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Email já existe');window.location.href='../View/cadastro.html';</script>";
	

   }else{

   $sql = "INSERT INTO cadastro_geral (email, nome, telefone, desejo, senha, confirma, mensagem) values('$email', '$nome', '$telefone', '$desejo', '$senha', '$confirma', '$mensagem')";

    mysqli_query($conn,$sql);   

    echo"<script language='javascript' type='text/javascript'>alert('Usuário Cadastrado com sucesso');window.location.href='../View/Login.html';</script>";

   }
  
}
  
   function selecionar_Usuario($email,$senha){
       
   
        $conn= conectar();  
 
        $result_usuario = "SELECT * FROM cadastro_geral  WHERE email= '$email' && senha = '$senha' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioEmail'] = $resultado['email'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];  
            $_SESSION['nome'] = $resultado['nome'];
            $_SESSION['id'] = $resultado['id'];
            header("Location: ../View/usuario.php");           
   
        
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/Login.html';</script>";
         
        }
    

  }
  
  function inserir($trech,$titulo_trecho,$trecho){ 

    $conn= conectar();   
 
    $sql = "INSERT INTO frete(nome,loca,distino)values('$trech''$titulo_trecho','$trecho')";
 
     mysqli_query($conn,$sql);   

     echo"<script language='javascript' type='text/javascript'>alert('Trecho Cadastrado com sucesso');window.location.href='../View/frm_livro.php';</script>";
 
   }

   

   public function excluir_frete ($cod_trecho){

    $conn= conectar();   
    
    $cod_livro= mysqli_query($conn, "SELECT * FROM frete WHERE id = '$cod_trecho'");	
    
    if(mysqli_num_rows($cod_livro) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/excluir.php';</script>";
    }
           else{	
    
                  $result_livro = "DELETE FROM frete WHERE id = '$cod_trecho'";
                  
                  mysqli_query($conn, $result_livro);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Excluído com sucesso');window.location.href='../View/perfil.php';</script>";
                     
              }else{
                  
                  header("Location:../view/frm_excluir.php");
                   
                  
              }
    }
  
    
   }


   public function alterar($cod_trecho, $titulo_trecho,$trecho){

    $conn= conectar(); 
    
  	$pegacod_trecho = mysqli_query($conn, "SELECT * FROM frete WHERE id = '$cod_trecho'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/alterar_frete.php'</script>";

	      }else{		

		
          $result_frete = "UPDATE frete SET loca = '$titulo_trecho', distino = '$trecho' WHERE id = '$cod_trecho'";

         mysqli_query($conn,$result_frete);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Trecho  alterado com sucesso!');window.location.href='../View/perfil.php'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/frm_alterar.php'</script>";
                     
                  
                     
              }


        }




   }
  

  

  public function alterar_senha( $email, $senha, $confirma){

    $conn= conectar(); 
    
  	$pegacod_trecho = mysqli_query($conn, "SELECT * FROM cadastro_geral WHERE email= '$email'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/senha.html'</script>";

	      }else{		

		
          $result_livro = "UPDATE cadastro_geral SET  senha='$senha', confirma='$confirma' WHERE email = '$email'";

         mysqli_query($conn,$result_livro);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso!');window.location.href='../View/login.html'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/senha.html'</script>";
                     
                  
                     
              }


        }


        function buscar($buscar){
       
   
          $conn= conectar();  
   
          $result_usuario = "SELECT * FROM cadastro1  WHERE nome= '$buscar'  LIMIT 1";
          
          $resultado_usuario = mysqli_query($conn, $result_usuario);
          
          $resultado = mysqli_fetch_assoc($resultado_usuario);
          
         
          if(isset($resultado)){
      
              $_SESSION['usuarioEmail'] = $resultado['email'];            		
              $_SESSION['usuarioSenha'] = $resultado['senha'];  
              $_SESSION['nome'] = $resultado['nome'];
              $_SESSION['id'] = $resultado['id'];
              header("Location: ../View/usuario.php");           
     
          
          }else{            
         
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/perfil';</script>";
           
          }
      
  
    }


   }
  }
  

