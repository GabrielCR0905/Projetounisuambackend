<!DOCTYPE html>
<?php 

require_once 'conexao.php';

session_start();
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;

if ($id_usuario !== null) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        $dados = mysqli_fetch_array($resultado);
        echo isset($dados['id']) ? $dados['id'] : '';
    } else {
        echo 'Erro na consulta SQL: ' . mysqli_error($conexao);
    }
} else {
    echo 'ID de usuário não definido na sessão.';
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="TeleCall" content="width=device-width, initial-scale=1.0">
    <title>SMS Programável</title>
    <link rel="stylesheet" href="assets/css/style3.4.css">
    
</head>
<body>
<header>
  <nav>
    <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">

    <ul class="menunav">

      <li><a href="index4.1.php">2FA</a></li>
      <li><a href="index4.2.php">Número Mascara</a></li>
      <li><a href="index4.3.php">Google Verified</a></li>
      <li><a href="index4.4.php">SMS Programável</a></li>
      <li><a href="index4.php">Página Inicial</a></li>
      <li> Usuário <?php  echo $dados['login1']; ?> </li>  <!-- Exibe o LoginName do Usuario -->
      <a href="logout.php" > Sair</a>


    </ul>

  </nav>
</header>

<section class="apresent2fa">

    <h1 class="titulo2fa">SMS Programável</h1>
  
    <h3 class="subtitulo2fa">Conecte-se com seus Clientes.</h3>
  
 
  </section>
  
  <img class="logo2fa" src="assets/img/smsimagem.png">
  <br><br>

  <section class="infogoogle1">
    <h1 class="titulogoogle">O que é?</h1>
  
    <h2 class="subgoogle">Conecte-se com seus Clientes.</h2>
  
    <p class="googleinfo">É muito provável que você já tenha recebido uma
        mensagem de texto de uma empresa ou organização.
        Com uma API, qualquer empresa pode enviar mensagens
        de texto e impactar clientes, prospects ou fornecedores
        como parte de seu processo comercial.
        Com essa ferramenta você envia mensagens de SMS com
        as informações que o seu cliente precisa e com a
        segurança, a velocidade e a confiabilidade que você
        espera.</p>
  
  
      
  
    </section>
    <hr>

    <section class="beneficiossms">
    <h1 class="tinumero">Benefícios</h1>

        
        
    
        <ul>
            <li class="infonum">Comunicação rápida, efetiva e escalável.</li>
            <li class="infonum">Baixo custo.</li>
            <li class="infonum">Alta taxa de entrega e leitura.</li>
            <li class="infonum">Personalização de data, hora e conteúdo.</li>
            <li class="infonum">Agendamento de campanhas.</li>
            <li class="infonum">Interação bidirecional: recebimento de respostas.</li>
            <li class="infonum">Plataforma user-friendly.</li>
            <li class="infonum">Acompanhamento de métricas e relatórios.</li>

        </ul>
    
    </section>

    <img class="quemusa" src="assets/img/quemusasms.png">