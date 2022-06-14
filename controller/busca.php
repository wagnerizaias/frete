<html>
<head>
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="../view/css/menu.css"> 
</head>
<body>
<div>
<h1>
<?php
     include_once("../Model/conectarr.php");
     $conn= conectar();  
    
    $pesquisar = $_POST['pesquisar'];
    $result = "SELECT * FROM frete WHERE nome LIKE '%$pesquisar%' LIMIT 1";
    $resultado = mysqli_query($conn, $result);
    
    
    while($rows_cursos = mysqli_fetch_array($resultado)){
        echo "Olá motorista: ".$rows_cursos['nome']."<br>";
    }
?></h1>


<h1><?php
      include_once("../Model/conectarr.php");
    
      $conn= conectar();  
    
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM frete WHERE nome LIKE '%$pesquisar%' LIMIT 1";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "ID: ".$rows_cursos['id']."<br> .";
        echo "Nome : ".$rows_cursos['nome']."<br> .";
        echo "Nome do local: ".$rows_cursos['loca']." <br>.";
        echo "Nome do destino: ".$rows_cursos['distino']." <br>.";
        echo "Telefone: ".$rows_cursos['telefone']." <br>";
       

    }
?></h1>



<table background="../View/imagem/utilitario.jpg"width="100%" height="40%">
 <h1> <tr>
    <th>ID    </th>
    <th>Nome</th>
    <th>Local</th>	
    <th>Destino</th>	
    <th>Telefone</th>
  </tr>  </h1>

  <?php 
    include_once("../Model/conectarr.php");
    
    $conn= conectar();  
    

    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM frete WHERE nome LIKE '%$pesquisar%' LIMIT 10";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
	
        
	while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ 
	
 ?>

  <h2><tr>
  <td><?php echo $rows_cursos['id'];?></td>
  <td><?php echo $rows_cursos['nome'];?></td>
  <td><?php echo $rows_cursos['loca'];?></td>
	<td><?php echo $rows_cursos['distino'];?></td>
	<td><?php echo $rows_cursos['telefone'];?></td>
  </tr></h2>
  
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



