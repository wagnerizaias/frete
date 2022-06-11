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
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="css/menu.css"> 
</head>
<body>
<div class="header"> 
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?><br><br>
<h1>Seja bem  <?php echo "<span>"; echo "vindo "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>
<a href="../Controller/consulta_frete.php"><button>Consulte minha viagem.</button></a><br><br>
<a href="cadastro_frete.php"><button>Insira destino. </button></a> 

<a href="alterar_frete.php"><button>Altere destino.</button></a><br><br>


<a href="excluir.php"><button>Exclua frete.</button></a><br><br>

<form  class="formulario" action="sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form><br>
<form  class="formulario" action="usuario.php">
    <input type="submit" value="Voltar">
</form>
</div>
</body>
</html>
<?php }?>	