<!DOCTYPE html>
<?php 

require_once 'conexao.php';

session_start();
// Obtendo o ID do usuario da sessao, se estiver definido
$id_usuario = isset($_SESSION['id']) ? $_SESSION['id'] : null;
//Verificando se o ID do Usuario está definido
if ($id_usuario !== null) {
    $id = $_SESSION['id']; //obtendo o ID da sessao
    $sql = "SELECT * FROM usuarios WHERE idusuario = '$id'";  //Consulta SQL para obter informaçoes do usuario pelo ID
    $resultado = mysqli_query($conexao, $sql);  // Executando a consulta no banco de dados
//Verificação Bem sucedida
    if ($resultado) {
        $dados = mysqli_fetch_array($resultado); // obtendo os dados do usuario
        echo isset($dados['id']) ? $dados['id'] : ''; // exibindo o id do usuario se estiver definido
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
    <title>2FA CpaaS</title>
    <link rel="stylesheet" href="assets/css/style3.1.css">
    
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

  <h1 class="titulo2fa">2FA - AUTENTICAÇÃO DE DOIS FATORES</h1>

  <h3 class="subtitulo2fa">Fortaleça a estratégia de segurança do deu negócio.</h3>


</section>

<img class="logo2fa" src="assets/img/2fa-image.jpg">
<br><br>

<article class="artigo1">
  <h2 id="factor">Two-Factor Authentication</h2>

  <h3 class="titulofactor">Autenticação de dois fatores</h3>
  <p class="pfactor">O 2FA é um procedimento de segurança que garante que serão
    necessários 2 fatores únicos para liberação de uma ação. O
    primeiro fator é a senha que o usuário e o segundo pode ser
    autenticado via token, via detecção de impressão digital,
    reconhecimento facial, código enviado via sms, entre outros.</p>

    <h3 class="titulofactor">O 2FA permite que você:</h3>
    <ul >

      <li>Envie uma senha via SMS, voz ou e-mail para autenticação do usuário.</li>
      <li>Adicione uma camada extra de segurança além da senha pessoal.</li>
      <li>Ofereça maior segurança para usuários.</li>

    </ul>
    <img class="imgfactor" src="assets/img/2fa-steps.png">
</article>
<hr>

<section class="funciona2fa">
  <h1 class="titulofunciona">Como Funciona?</h1>
  

  <div class="funciona1">
    <img class="imgfunciona" src="assets/img/laptop.png">
   <p>Usuário acessa seu site o
    aplicativo e digita a senha
    cadastrada para entrar em
    seu perfil ou completar uma
    transação.</p>
  </div>

  <div class="funciona2">
    <img class="imgfunciona" src="assets/img/warning.png">
    <p>A Telecall recebe a tentativa
      de login e solicita que o
      usuário insira seu número de
      telefone para autorizar o
      acesso.</p>
  </div>

  

  <div class="funciona4">
    <img class="imgfunciona" src="assets/img/laptop.png">
    <p>O usuário insere o código no
      site ou aplicativo para
      concluir o processo de
      verificação.</p>
  </div>



</section>

 <section class="beneficios2fa1">
  <hr>
  <h1 class="tibeneficios2fa">Beneficios</h1>

  <ul class="beneficios2fa" >

    <li>Ofereça segurança aprimorada para seus clientes.</li>
    <li>Reduza casos de fraude e invasões e evite o acesso a dados por invasores.</li>
    <li>Envio de OTP por meio de vários canais, incluindo SMS, voz ou e-mail.</li>
    <li>Flexibilidade de canais garante que o usuário conseguirá completar a tarefa desejada
      mesmo quando tiver problema com um deles. Exemplo: Enviar OTP por SMS, em caso de
      falha, enviar OTP por chamada de voz, em caso de outra falha, enviar por e-mail.</li>
    <li>API simples e de rápida implementação.</li>
    <li>Plataforma intuitiva que permite visualizar relatórios de uso por dia, mês ou ano e
      pesquisar usando diversos critérios de filtro.</li>

  </ul>

  <img class="imgbeneficios2fa" src="assets/img/2fa-steps.png">

 </section>

 <span class="obscuro">
  <h1>Quem usa?asdasdasdasdasadasdasdasdasadasdsaasdadasdasdasdasdasdasdasdasdasdadadasasdasdas</h1>
 </span>
 <article>
  <h1 class="tibeneficios2fa">Quem Usa?</h1>
  <div class="quemusa2fa">
  
  <div class="box2fa">
  <h2 class="tibox2fa">Finanças</h2>
  <ul>

    <li>Acesso ao portal/app </li>
    <li>Autenticação para
      transações bancárias</li>
    <li>Pagamentos Online
      (PicPay, PayPal)</li>
    <li>Digital Wallets (Google
      Pay, Apple Pay,
      Samsung Pay)</li>

  </ul>
</div>

<div class="box2fa">
<h2 class="tibox2fa">Saúde</h2>
<ul>

  <li>Acesso ao
    portal/app</li>
  <li>Agendamentos<li>
  <li>Tokens de
    autorização</li>
  <li>Telemedicina</li>

</ul>
</div>

<div class="box2fa">
  <h2 class="tibox2fa">Turismo</h2>
  <ul>
  
    <li>Acesso ao
      portal/app</li>
    <li>Gestão de Reservas<li>
    <li>Acesso ao histórico</li>
    <li>Salvar dados de
      pagamentos</li>
    <li>Recuperação de
      Senha</li>
  
  </ul>
  </div>

  <div class="box2fa">
    <h2 class="tibox2fa">Varejo</h2>
    <ul>
    
      <li>Acesso ao
        portal/app</li>
      <li>Salvar dados de
        pagamentos</li>
      <li>Acesso ao
        histórico</li>
      <li>Recuperação de
        Senha</li>
      <li>Recibo Eletrônico</li>
    
    </ul>
    </div>

    <div class="box2fa">
      <h2 class="tibox2fa">Governo</h2>
      <ul>
      
        <li>Acesso ao portal/app</li>
        <li>Gestão de
          informações Agendamentos<li>
        <li>Recuperação de Senha</li>
        
      
      </ul>
      </div>
  </div>

 </article>
 
 






</body>
</html>