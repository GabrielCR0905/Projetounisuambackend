<?php 
include ("conexao.php");

if(isset ($_POST['nova-senha'])):// Seleciona os dados a serem alterados

 $nome = $_POST['nome'];
 $sexo = $_POST['sexo'];
 $materno = $_POST['nome_materno'];
 $cpf = $_POST['cpf'];
  $celular = $_POST['telefone_celular'];
 $fixo = $_POST['telefone_fixo'];
 $endereco = $_POST['endereco'];
 $login = $_POST['login'];
 $senha = $_POST['senha'];
 $id = mysqli_escape_string($conexao,  $_POST['idusuario']);


// Faz o Update do Usuario, atualizando seus dados no banco de dados
 $sql = "UPDATE  usuarios SET nome = '$nome', sexo = '$sexo' , materno = '$materno' , cpf = '$cpf' , celular = '$celular' , fixo = '$fixo' , endereco = '$endereco' , login1 = '$login' , senha = md5('$senha')   WHERE idusuario = '$id' ";
 $senha = md5($senha);



 if (mysqli_query($conexao, $sql)): 

    header("Location: index4.php"); // Redirect to the login page
else:
    echo "Erro: " . mysqli_error($conexao);
 endif;
endif;
?>