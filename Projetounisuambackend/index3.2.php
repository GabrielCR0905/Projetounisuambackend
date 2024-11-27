<!DOCTYPE html>
<?php 

require_once 'conexao.php';

session_start();
//Obtendo o ID do usuario da sessao, se estiver definido
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
// Verificando se o ID do Usuario está Definido
if ($id_usuario !== null) {
    $id = $_SESSION['id']; //obtendo o ID da sessao
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id'"; //Consulta SQL para obter informaçoes do usuario pelo ID
    $resultado = mysqli_query($conexao, $sql);  // Executando a consulta no banco de dados
// Verificação bem Sucedida
    if ($resultado) {
        $dados = mysqli_fetch_array($resultado); // Obtendo os dados do usuario
        echo isset($dados['id']) ? $dados['id'] : '';  // Exibindo o ID do usuario se estiver definido
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
    <title>Número Máscara CPaaS</title>
    <link rel="stylesheet" href="assets/css/style3.2.css">
    
</head>
<body>
<header>
  <nav>
    <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">

    <ul class="menunav">

      <li><a href="index3.1.php">2FA</a></li>
      <li><a href="index3.2.php">Número Mascara</a></li>
      <li><a href="index3.3.php">Google Verified</a></li>
      <li><a href="index3.4.php">SMS Programável</a></li>
      <li><a href="index3.php">Página Inicial</a></li>
      <li> Usuário <?php  echo $dados['login1']; ?> </li>  <!-- Exibe o LoginName do Usuario -->
      <a href="logout.php" > Sair</a>


    </ul>

  </nav>
</header>

<section class="apresent2fa">

    <h1 class="titulo2fa">NÚMERO DE MÁSCARA</h1>
  
    <h3 class="subtitulo2fa">Conecte-se com seus clientes de forma fácil e rápida.</h3>
  
 
  </section>
  
  <img class="logo2fa" src="assets/img/nummascaralogo.png">
  <br><br>
 
  <section class="numeromas1">
    <h1 class="tinumero">Número Máscara</h1>

    <h2 class="mascaraiden">Proteja identidades profissionais</h2>
    

    <ul>
        <li class="infonum">Mascare um número de telefone para interações com mais
            privacidade.</li>
        <li class="infonum">Permite que empresas façam negócios usando menos
            números de telefone.</li>
        <li class="infonum">Garanta aos seus clientes a capacidade de fazer chamadas e enviar
          mensagens sem expor seus números de telefone pessoais.</li>
    </ul>


  </section>

 
  <img class="imgcel" src="assets/img/nummascaracel.png">

  <section class="infomascara">
    <p class="infop">É muito provável que você já tenha recebido uma
        mensagem de texto de uma empresa ou organização.</p>

    <p class="infop">Com as APIs de CPaaS Telecall, qualquer empresa pode enviar mensagens de texto ou voz e impactar clientes, prospects ou fornecedores como parte de seu processo comercial.</p>
    
    <p class="infop">Com essa ferramenta, você envia mensagens de SMS ou de voz com as informações que o seu cliente precisa e com a segurança, a velocidade e a confiabilidade que você espera.</p>
 
  </section>

  <span class="obscuro2"><p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasaaaaaaaaaaaaaaaaaaaaaaaa</p></span>


  <img class="imgmascara1" src="assets/img/Captura de tela 2023-06-09 170106.png">

  <section>
  <h1 class="tinumero">Benefícios</h1>
  <ul>
    <li  class="mascarabeneficios">Comunicação rápida, efetiva e escalável.</li>
    <li  class="mascarabeneficios">Baixo custo.</li>
    <li  class="mascarabeneficios">Alta taxa de entrega e leitura.</li>
    <li  class="mascarabeneficios">Personalização de data, hora e conteúdo.</li>
    <li  class="mascarabeneficios">Interação bidirecional: recebimento de respostas.</li>
    <li  class="mascarabeneficios">Plataforma user-friendly.</li>
    <li  class="mascarabeneficios">Acompanhamento de métricas e relatórios</li>
  </ul>

  </section>

  