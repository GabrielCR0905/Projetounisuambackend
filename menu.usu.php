<?php
include 'conexao.php';


              // Verifica se o parametro 'idusuario' está presente na URL
if(isset($_GET['idusuario'])):

  //Obtem o ID do usuario da URL e realiza a Limpeza 
   $id =mysqli_escape_string($conexao, $_GET['idusuario']);


   // Monta a Query para selecionar os dados do usuario
   $sql = "SELECT * FROM usuarios WHERE idusuario = '$id' ";
   // executa a query
   $resultado = mysqli_query($conexao,$sql);
   //obtem os dados do usuario como um array associativo
   $dados = mysqli_fetch_array($resultado);
endif;

?>

<html lang="pt-br">

<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="TeleCall" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style0.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="" defer></script>
    
    
    <title> Editar Cliente</title>
</head>



<body>

    <!-- Formulario de Edição do Usuario -->
    <h2>Redefinir Senha </h2>
    <form  action="novasenha.php" id="formulario"  method="POST">
      <input type="hidden" value="<?php echo $dados['idusuario']; ?>" name="idusuario"> <!-- echo $dados pega os dados ja salvo do usuario e o exibe no campo -->
      
  
      <label for="senha">Senha:</label><br>
      <input type="password" id="senha" name="senha" value="<?php echo $dados['senha']; ?>"><br><br>
  
      <label for="confirmar_senha">Confirmação de Senha:</label><br>
      <input type="password" id="confirmar_senha" name="confirmar_senha"><br><br>
  
      <button type="submit" id="nova-senha" name="nova-senha" >Atualizar</button>
      <button type="reset">Limpar Tela</button>
    </form>

    <div id="avisos"></div>


    </body>






</html>