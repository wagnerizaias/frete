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




<h1>Pesquisar minha viagem:</h1>
<h1><form method="POST" action="../controller/busca.php">
        <div class="form-group">
            <label for="NOME">Nome: </label><br>
            <input class="form-control" id="NOME" placeholder="Nome do motorista" name="pesquisar">
        </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 24;">Buscar</button>
</form></h1>

<body><br>
<div class="header"> 

<h1>Seja bem  <?php echo "<span>"; echo "vindo "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>

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