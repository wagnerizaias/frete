

<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];
			$_SESSION['nome'];

if(!isset($_SESSION["usuarioEmail"])|| !isset($_SESSION["nome"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: controle_logar.php");
                
		exit;
		}else{
		
?>
<html>
<head>
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="css/menu.css"> 
</head>
<body>
<div>

<h1><?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<br><br></h1>
<h1><?php echo "<span>"; echo "Seja Bem-Vinda: "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?></h1>
<br>
<h2><fieldset>
<h2><legend>Perfil usuario.</legend></h2>
<a href="perfil.php">Consulta</a><br><br>
</fieldset></h2>
<br>

<a href="../Controller/consulta_frete.php"><button>Consulta de frete.</button></a><br><br>

<form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form><BR>
</div>
</body>
</html>
<?php }?>	
<?php

            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>

<body>
    <div class="header">  
<h1>Qual seu destino:</h1>    

<h1>  <?php echo "<span>"; echo ""; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>
   <form class="formulario" method="POST" action="../Controller/cadastrar_frete.php"> 

   <h2><label for="titulo_trecho">Nome:</label></h2>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome.*" required> <br><br>

        <h2><label for="titulo_trecho">Local:</label></h2>
        <input type="text" id="titulo_trecho" name="titulo_trecho" placeholder="Digite sua localização." required> <br><br>       
    
        <h2><label for="trecho">Tipo veiculo<br> Destino:</label></h2><br>
        <textarea id="trecho" name="trecho" rows="5" cols="33"  required> 
        </textarea>          
       <h2><label for="telefone">Telefone:</label></h2>
        <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone.*" required> <br><br>
   
         <input type="submit" name="acao" value="Gravar">    <br>    
        </div>   
</div>
</form>
<div class="header">  
<form  class="formulario" action="perfil.php"><br>
    <input type="submit" value="Voltar">
</form>
</div>
</div>
</div>
</body>
</html>
<?php }?>