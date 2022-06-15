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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="css/menu.css">   
    <title>Alterar Trecho</title>
</head>
<body>
    <div class="header"> 
    <h1>Qual sera alteração <?php echo "<span>"; echo " agora "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?> <br><br></h1>
   <form class="formulario" method="POST" action="../Controller/contole_alterar.php"> 
    <p> Alterar Trecho</p>
    <div class="header">
        <h3><label for="codigo_trecho"> ID:</label></h3><br>
        <input type="text" id="Local" name="codigo_trecho" placeholder="Digite ID viagem">    <br>  
        <h3><label for="titulo_trecho">Local:</label></h3><br>
        <input type="text" id="titulo_trecho" name="titulo_trecho" placeholder="Digite sua localizaçao"> <br>           
        <h3><label for="trecho">Destino/ dados veiculo:</label></h3><br>
        <textarea id="trecho" name="trecho" rows="5" cols="33"> 
        </textarea>    <br>        
        <input type="submit" name="acao" value="Alterar ">        
  
</form>
<div class="header">  
<form  class="formulario" action="usuario.php">
    <input type="submit" value="Voltar">
</form>
    </form>
    </div>
    </div>
        </div>
</body>
</html>
<?php }?>	