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
    <title>Menu CpaaS Telecall</title>
    <link rel="stylesheet" href="assets/css/style3.css">
    <script src="script0.js" defer></script>
</head>
<body>
<header>
  <nav>
    <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">
   
    <ul class="menunav" id="menunavlogin">

      <li><a href="contausu.php?idusuario=<?php echo $dados ['idusuario']; ?>">Conta</a></li> <!-- Troca de Senha -->
      <li><a href="index4.1.php">2FA</a></li>
      <li><a href="index4.2.php">Número Mascara</a></li>
      <li><a href="index4.3.php">Google Verified</a></li>
      <li><a href="index4.4.php">SMS Programável</a></li>
      
      <li> Usuário <?php  echo $dados['login1']; ?> </li>
        <!-- Exibe o LoginName do Usuario -->
      <a href="logout.php" > Sair</a> <!-- Encerra a sessão do Usuario -->
       
      

    </ul>

  </nav>
</header>
<main></main>
<section class="apresent">

 <h2 class="titulo">CPaaS: O que é?</h2>

<div class="menuapresent">
  <p>É uma solução de software de comunicação que atua
  como uma base sobre a qual desenvolvedores podem
  integrar uma variedade de aplicativos.
  Métodos de comunicação típicos, como voz, chamadas
  de vídeo ou mensagens de texto SMS, podem ser
  incorporados em outros sistemas por meio de APIs que
  se conectam à plataforma CPaaS.
  Essas APIs permitem que as empresas expandam suas
  ofertas sem a necessidade de hardware ou software
  adicional.
  Communications Platform as a Service
  Plataforma de Comunicação como Serviço.</p>
</div>

<div class="titulo2">
<h2>Confiavel.</h2>
<h2>Autêntico.</h2>
<h2>Flexível.</h2>

</div>
 
  </section>
<img id="imgmenu" src="assets/img/undraw_online_stats_0g94.svg" alt="">
  
<section class="usos">
<div class="logistica">
 
  <h2 class="titulologistica"> Logística</h2>

  <p>Acesso seguro com 2FA.
  Uso de números mascarados
  para proteção de funcionário
  
  e cliente.
  
  Mantenha o cliente
  informado sobre entrega e
  
  serviços.
  Verified calling para
  confirmação de entregas.
  </p>
  
  
  </div>
  
  <div class="varejo">
    
    <h2 class="titulovarejo">Varejo</h2>

    <p>
      Compra segura com 2FA.
Avisos sobre compras e
entregas.

Upsell com novas ofertas e
vantagens via SMS ou
Verified Calling.
Com essa ferramenta sua
praticidade aumenta   
venda de serviços e bens 
prontos de uma empresa
 
     
  
 
 
 



    </p>

    
  </div>
<div class="callcenter">
  
      <h2 class="titulocallcenter">CallCenter</h2>
      <p>
        Melhore taxas de abertura
    utilizando alertas SMS para
    confirmações.
    Economia de números com o
    uso de um único número
    máscara por todos os agentes.
    Verified Calling para
    confirmação de
    agendamentos.
      </p>
    
    </div>

    <div class="saude">

      <h2 class="saudetitulo">Saúde</h2>
    <p>Acesso seguro com 2FA.
      Melhore o agendamento e
      reduza faltas com lembretes por
      
      SMS.
      
      Tokens de autorização para
      procedimentos com 2FA.
      Verified Calling para avisos de
      resultados e agendamentos.</p>

    </div>

</section>
<span class="a"><p>aoisjdiaosdiasdiasjdioasjdioasjdioasjidojasdiasjdioasasdasdasdasdassewrwerwerwedasódijasodkasdopaksódkaspdokasopdkasodpkasopdkasodkas</p></span>
<hr>
<section>
  <h1 class="titulosolucoes">Plataforma e Soluçoes</h1>
  <div class="doisfa">
  <h2 class="subtitulo">2FA</h2>

  <p>Two-Factor Authentication
    Autenticação de dois fatores
    
    O 2FA é um procedimento de segurança que garante que serão
    necessários 2 fatores únicos para liberação de uma ação. O
    primeiro fator é a senha que o usuário e o segundo pode ser
    autenticado via token, via detecção de impressão digital,
    reconhecimento facial, código enviado via sms, entre outros.
    
    O 2FA permite que você:
    • Envie uma senha via SMS, voz ou e-mail para autenticação do usuário.
    • Adicione uma camada extra de segurança além da senha pessoal.
    • Ofereça maior segurança para usuários. <a class="saiba2fa" href="index3.1.html">Saiba mais</a>
    </p>

</div>



</section>
<div class="img2fa">
<img src="assets/img/autentification-deux-facteurs-faille.jpg">

</div>

<br>
<div class="nummascara">
  <h2 class="subtitulo">Número Máscara</h2>

  <p>Proteja identidades profissionais

    Garanta aos seus clientes a capacidade de fazer chamadas e enviar
    mensagens sem expor seus números de telefone pessoais.
    
    • Mascare um número de telefone para interações com mais
    privacidade.
    • Permite que empresas façam negócios usando menos
    números de telefone.
    • Oferece uma experiência mais segura e profissional.<a class="saiba2fa" href="index3.2.html">Saiba mais</a></p>
  
</div>
<div class="imgmascara">
  <img src="assets/img/User-unlocking-iPhone-with-Passcode-while-wearing-mask-without-Face-ID.pagespeed.ce_.vDxWoYvxZ8.png">

</div>

<div class="google">
  <h2 class="subtitulo">Google Verified Calls</h2>

  <p>Chamadas Verificadas do Google
    Esse novo recurso do Google, exclusivo para
telefones Android, permite que empresas exibam
para o cliente na hora da chamada sua marca,
logotipo e até mesmo o motivo da chamada.
A Telecall é a primeira operadora de telecom no
Brasil a oferecer esse recurso do Google.<a class="saiba2fa" href="index3.3.html">Saiba mais</a>

  </p>
</div>
<div class="imggoogle">
<img src="assets/img/google-verified-calls.jpg">
</div>

<div class="sms">
 <h2 class="subtitulo">SMS Programável</h2>

 <p>Conecte-se com seus clientes.
  É muito provável que você já tenha recebido uma
  mensagem de texto de uma empresa ou organização.
  Com uma API, qualquer empresa pode enviar mensagens
  de texto e impactar clientes, prospects ou fornecedores
  como parte de seu processo comercial.
  Com essa ferramenta você envia mensagens de SMS com
  as informações que o seu cliente precisa e com a
  segurança, a velocidade e a confiabilidade que você
  espera.<a class="saiba2fa" href="index3.4.html">Saiba mais</a>

 </p>

</div>
<div class="imgsms">
  <img src="assets/img/1-compressed-24.jpg">


</div>


</div>

<section class="vantagenstelecall">
  <h2 class="vantagensti">Vantagens Telecall</h2>

  <ul class="vantagens1">

    <li><span class="vantagensazul">Confiança</span> Empresa que já conhecem e confiam;</li>
    <li><span class="vantagensazul"> Aplicativos</span> de rápida implementação</li>
    <li><span class="vantagensazul">Garantia de Rede</span> Rede própria de alta capacidade e controle total de ponta-a-ponta;</li>
    <li><span class="vantagensazul">Suporte ao Cliente</span> Representantes locais de vendas e suporte;</li>
    <li><span class="vantagensazul">Preço</span> Melhor custo benefício para um conjunto completo de recursos e serviços;</li>

  </ul>


</section>





</body>
</html>
