


<?php 
include ("conexao.php");

// Verifica se o botão de deletar foi acionado no formulario
if(isset ($_POST['btn-deletar'])):

 // Obtem o ID do Usuário a ser deletado e realiza a limpeza para evitar SQL Injection
 $id = mysqli_escape_string($conexao,  $_POST['idusuario']);


 // Monta a query e verifica se foi bem-sucedida
 $sql = "DELETE  FROM usuarios WHERE idusuario = '$id' ";
 


// Executa a query e verifica se foi bem-sucecida
 if (mysqli_query($conexao, $sql)): 

    header("Location: indexadm.php"); // Se a exclusão foi bem Sucedida, 
else:
    echo "Erro: " . mysqli_error($conexao); // Se ocorrer um error na execução do query
 endif;
endif;
?>