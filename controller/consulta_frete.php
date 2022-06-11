
<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha']; 
            $_SESSION['id'];

if(!isset($_SESSION["usuarioEmail"])  || !isset($_SESSION["id"])|| !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.php");
                
		exit;
		}else{
		
?>
<html>
<head>
<title>Consulta Trechos de Livros</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="../View/css/menu.css"> 
</head>
<body>
<div>

<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<h1>Consulta <?php echo "<span>"; echo "destino "; echo "</span>"; echo "<span>"; echo $_SESSION['id']; echo "</span>";?>.</h1><br><br>

<form  class="formulario" action="../View/usuario.php">
    <input type="submit" value="Voltar">
</form><br>
<table border="1" width="100%" height="40%">
 <h1> <tr>
    <th>ID    </th>
    <th>Nome</th>
    <th>Local</th>	
    <th>Destino</th>	
    <th>Telefone</th>
  </tr>  
  
  <?php 
    include_once("../Model/conectarr.php");
    
    $conn= conectar();  
    

  $livro = "SELECT * FROM frete ORDER BY id";
    
	$resultado_livro = mysqli_query($conn, $livro);
        
	while($row_livro = mysqli_fetch_assoc($resultado_livro)){ 
	
 ?>

  <tr>
  <td><?php echo $row_livro['id'];?></td>
  <td><?php echo $row_livro['nome'];?></td>
  <td><?php echo $row_livro['loca'];?></td>
	<td><?php echo $row_livro['distino'];?></td>
	<td><?php echo $row_livro['telefone'];?></td>
  </tr>
  
  <?php }?>

</table>
<br>
<div class="header"> 
<form action="../View/sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form>
</div>
<div class="header">  
<form  class="formulario" action="../View/usuario.php">
    <input type="submit" value="Voltar">
</form>
</div>
</div>
</body>
</html>
    <?php }	