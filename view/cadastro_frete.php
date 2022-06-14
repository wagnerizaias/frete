<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/menu.css">   
    <title>Cadastro de livro</title>
</head>
<body>
    <div class="header">  

    <?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?> <br><br>
   <form class="formulario" method="POST" action="../Controller/cadastrar_frete.php"> 
<h1>Qual seu destino  <?php echo "<span>"; echo "agora "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>
   <label for="titulo_trecho">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required> <br><br>

        <label for="titulo_trecho">Local:</label>
        <input type="text" id="titulo_trecho" name="titulo_trecho" placeholder="Digite sua localização*" required> <br><br><br>       
    
        <label for="trecho">Destino:</label>
        <textarea id="trecho" name="trecho" rows="5" cols="33"> 
        </textarea>   <br>
        <label for="titulo_trecho">Telefone:</label>
        <input type="text" id="tefone" name="telefone" placeholder="Digite seu telefone*" required> <br><br><br>       
               
         <input type="submit" name="acao" value="Gravar">        
        </div>   
</div>
</form><br>
<div class="header">  
<form  class="formulario" action="perfil.php">
    <input type="submit" value="Voltar">
</form>
</div>
</div>
</div>
</body>
</html>
<?php }?>