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
    <title>Google Verified CpaaS</title>
    <link rel="stylesheet" href="assets/css/style3.3.css">
    
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

    <h1 class="titulo2fa">GOOGLE VERIFIED CALLS</h1>
  
    <h3 class="subtitulo2fa">Proteja-se contra Spam e ligaçoes indesejadas.</h3>
  
 
  </section>
  
  <img class="logo2fa" src="assets/img/Captura de tela 2023-06-10 105011.png">
  <br><br>

  

  <section class="infogoogle1">
    <h1 class="titulogoogle">O que é?</h1>
  
    <h2 class="subgoogle">Chamadas Verificadas.</h2>
  
    <p class="googleinfo">Esse novo recurso do Google, exclusivo para
      telefones Android, permite que empresas exibam
      para o cliente na hora da chamada sua marca,
      logotipo e até mesmo o motivo da chamada.
      A Telecall é a primeira operadora de telecom no
      Brasil a oferecer esse recurso do Google.</p>
  
  
      <img class="imginfogoogle" src="assets/img/imggoogle.png">
  
    </section>

    

    <section class="googlecompati">
        <h1 class="tinumero">Compatibilidade</h1>

        
        
    
        <ul>
            <li class="infonum">Exclusivo para sistema operacional Android
                através do aplicativo Telefone.</li>
            <li class="infonum">Pré-instalado em telefones mais recentes ou pode
                ser baixado do Google Play Store para a maioria
                dos dispositivos com Android 9.0.</li>
            <li class="infonum">Hoje no Brasil existem quase 239 milhões de
                celulares smartphone ativos, sendo que o sistema
                Android detém uma participação de mais de 86%
                do mercado de sistema operacional móvel no país.</li>
        </ul>
    
    <img class="imgcompati" src="assets/img/smartphone-pin.png">

    </section>

    
    <section>
        <h1 class="tinumero">Benefícios</h1>

        
        
    
        <ul>
            <li class="infonum">Estabeleça Confiança:
                Clientes são mais propensos a atender chamadas de organizações com os quais estão
                familiarizadas e com as quais já tem relação.</li>
            <li class="infonum">Agilize a Conexão:
                Quando o motivo da chamada é claro, a chance de o cliente atender é muito maior e a conexão
                com ele mais rápida e eficiente.</li>
            <li class="infonum">Melhore a Experiência do Cliente:
                O nome da marca, logotipo e a visualização do motivo da chamada oferecem uma experiencia
                melhor e muito mais amigável para o cliente.</li>
        </ul>

        <img class="imgcomofunciona" src="assets/img/comfuncigoogle.png">
        
</section>


<section class="usosgoogle">
    
    <h1 class="tinumero">USOS</h1>

        
        
    
    <ul>
        <li class="infonum">Aviso de problemas de fraude de cartão de crédito.</li>
        <li class="infonum">Aviso de atrasos e cancelamentos de voos.</li>
        <li class="infonum">Agendamentos de serviços, entregas, reparos e
            instalações.</li>
        <li class="infonum">Avisos sobre agendamentos, exames e resultados.</li>
        <li class="infonum">Oferecer uma melhor experiência de vendas e
            promoções.</li>
    </ul>



</section>
