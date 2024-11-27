<!DOCTYPE html>
<?php 

include 'conexao.php';
session_start();


?>


<html lang="pt-br">

<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="TeleCall" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style0.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="" defer></script>
    
    
    <title>Adicionar Novo Cliente</title>
</head>



<body>

     <!-- Formulario de Adicionar Novo Usuario pelo adm -->
    <h2>Cadastrar Novo Usuário Telecall </h2>
    
    <form  action="cadastroadm.php" id="formulario"  method="POST">
      <label for="nome">Nome:</label><br>
      <input type="text" id="nome" name="nome"><br><br>
  
      <label for="data_nascimento">Data de Nascimento:</label><br>
      <input type="date" id="data_nascimento" name="data_nascimento"><br><br>
  
      <label for="sexo">Sexo:</label><br>
      <input type="radio" id="sexo_masculino" name="sexo" value="Masculino">
      <label for="sexo_masculino">Masculino</label>
      <input type="radio" id="sexo_feminino" name="sexo" value="Feminino">
      <label for="sexo_feminino">Feminino</label><br><br>
  
      <label for="nome_materno">Nome Materno:</label><br>
      <input type="text" id="nome_materno" name="nome_materno"><br><br>
  
      <label for="cpf">CPF:</label><br>
      <input type="number" id="cpf" name="cpf"><br><br>
  
      <label for="telefone_celular">Telefone Celular:</label><br>
      <input type="tel" id="telefone_celular" name="telefone_celular"><br><br>
  
      <label for="telefone_fixo">Telefone Fixo:</label><br>
      <input type="tel" id="telefone_fixo" name="telefone_fixo"><br><br>
  
      <label for="endereco">Endereço:</label><br>
      <input type="text" id="endereco" name="endereco"><br><br>
  
      <label for="login">Login:</label><br>
      <input type="text" id="login" name="login"><br><br>
  
      <label for="senha">Senha:</label><br>
      <input type="password" id="senha" name="senha"><br><br>
  
      <label for="confirmar_senha">Confirmação de Senha:</label><br>
      <input type="password" id="confirmar_senha" name="confirmar_senha"><br><br>
  
      <button type="submit" id="enviar-btn" >Enviar</button>
      <button type="reset">Limpar Tela</button>
    </form>

    <div id="avisos"></div>


    </body>






</html>