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



<html>
    <head>

      <meta charset="utf-8">
      <title>Meus Dados</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="assets/css/styleusu.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="#cfd8dc blue-grey lighten-4">
      <header>
        <nav>
          <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">
      
          <ul class="menunav">
      
            
            <li><a href="index4.php">Página Inicial</a></li>
            <li> Usuário <?php  echo $dados['login1']; ?> </li>
            <a href="logout.php" > Sair</a>
      
          </ul>
      
        </nav>
      </header>
      <body>
      
      <form  action="" id="formulario"  method="POST"><h3>Meus Dados: </h3>
        <input type="hidden" value="<?php echo $dados['idusuario']; ?>" name="idusuario"> <!-- echo $dados pega os dados ja salvo do usuario e o exibe no campo -->
        <label for="nome">Nome:</label><br>
        <?php echo $dados['nome']; ?><br><br>
    
    
        <label for="sexo">Sexo:</label><br>
        <?php echo $dados['sexo']; ?><br><br>

        <label for="dtnasc">Data Nascimento:</label><br>
        <?php echo $dados['dtnasc']; ?><br><br>
    
        <label for="nome_materno">Nome Materno:</label><br>
        <?php echo $dados['materno']; ?><br><br>
    
        <label for="cpf">CPF:</label><br>
        <?php echo $dados['cpf']; ?><br><br>
    
        <label for="telefone_celular">Telefone Celular:</label><br>
        <?php echo $dados['celular']; ?><br><br>
    
        <label for="telefone_fixo">Telefone Fixo:</label><br>
        <?php echo $dados['fixo']; ?><br><br>
    
        <label for="endereco">Endereço:</label><br>
        <?php echo $dados['endereco']; ?><br><br>
    
        <label for="login">Login:</label><br>
        <?php echo $dados['login1']; ?><br><br>
    
        <label for="senha">Senha:</label><br>
        <?php echo $dados['senha']; ?><br><br>
        <button><li><a href="menu.usu.php?idusuario=<?php echo $dados ['idusuario']; ?>">Trocar senha</a></li></button> <!-- Troca de Senha -->
    
    
      </form>
  
      <div id="avisos"></div>
  
  
      </body>
  