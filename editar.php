<!DOCTYPE html>
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
    <h2>Editar Cliente </h2>
    <form  action="update.php" id="formulario"  method="POST">
      <input type="hidden" value="<?php echo $dados['idusuario']; ?>" name="idusuario"> <!-- echo $dados pega os dados ja salvo do usuario e o exibe no campo -->
      <label for="nome">Nome:</label><br>
      <input type="text" id="nome" name="nome" value="<?php echo $dados['nome']; ?>"><br><br>
  
      <label for="data_nascimento">Data de Nascimento:</label><br>
      <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $dados['dtnasc']; ?>"><br><br>
  
      <label for="sexo">Sexo:</label><br>
      <input type="radio" id="sexo_masculino" name="sexo" value="Masculino">
      <label for="sexo_masculino">Masculino</label>
      <input type="radio" id="sexo_feminino" name="sexo" value="Feminino">
      <label for="sexo_feminino">Feminino</label><br><br>
  
      <label for="nome_materno">Nome Materno:</label><br>
      <input type="text" id="nome_materno" name="nome_materno" value="<?php echo $dados['materno']; ?>"><br><br>
  
      <label for="cpf">CPF:</label><br>
      <input type="number" id="cpf" name="cpf" value="<?php echo $dados['cpf']; ?>"><br><br>
  
      <label for="telefone_celular">Telefone Celular:</label><br>
      <input type="tel" id="telefone_celular" name="telefone_celular" value="<?php echo $dados['celular']; ?>"><br><br>
  
      <label for="telefone_fixo">Telefone Fixo:</label><br>
      <input type="tel" id="telefone_fixo" name="telefone_fixo" value="<?php echo $dados['fixo']; ?>"><br><br>
  
      <label for="endereco">Endereço:</label><br>
      <input type="text" id="endereco" name="endereco" value="<?php echo $dados['endereco']; ?>"><br><br>
  
      <label for="login">Login:</label><br>
      <input type="text" id="login" name="login" value="<?php echo $dados['login1']; ?>"><br><br>
  
      <label for="senha">Senha:</label><br>
      <input type="password" id="senha" name="senha" value="<?php echo $dados['senha']; ?>"><br><br>
  
      <label for="confirmar_senha">Confirmação de Senha:</label><br>
      <input type="password" id="confirmar_senha" name="confirmar_senha"><br><br>
  
      <button type="submit" id="btn-editar" name="btn-editar" >Atualizar</button>
      <button type="reset">Limpar Tela</button>
    </form>

    <div id="avisos"></div>


    </body>






</html>