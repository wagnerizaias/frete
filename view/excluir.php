<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<html>
<head>
<title>Excluir</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="css/menu.css">   
 </head>
<body>
<div class="header">
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<form class="formulario"  action="../Controller/frete_excluir.php" method="POST">
<h1> <?php echo "<span>"; echo " Olá,"; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>
<div class="field"> 
    <h2>Excluir seu destino anterior:</h2><br>
<label>Digite o Código ID:</label><input type="text" name="codigo_trecho"><br><br>
<input type="submit" value="Excluir frete" name="acao">
</form>
<form  class="formulario" action="perfil.php">
    <input type="submit" value="Voltar">
</form>
</div>
</body>
</html>

<?php }	