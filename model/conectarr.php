<?php


    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'cadastro');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
    }
    

    
}
