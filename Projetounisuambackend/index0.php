<!DOCTYPE html>
<?php 

include 'conexao.php';
session_start();




// Verifica se o botão foi inserido corretamenta
if (isset($_POST['enviar-formulario'])) {
    $erros = array();
    // Recupere os dados da Solicitação POST
    $nome = $_POST['nome'];
    $materno = $_POST['nome_materno'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['telefone_celular'];
    $fixo = $_POST['telefone_fixo'];
    $endereco = $_POST['endereco'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmar_senha'];

    // Validar o nome
    if (strlen($nome) < 15) {
        $erros[] = "O nome deve ter no mínimo 15 caracteres.";
    }

    if (strlen($materno) < 15) {
        $erros[] = "O materno deve ter no mínimo 15 caracteres.";
    }

    // Adicione mais validações para outros campos aqui...

    if (!ctype_digit($cpf) || strlen($cpf) !== 11) {
        $erros[] = "CPF inválido. Certifique-se de inserir apenas números e ter 11 dígitos.";
    }

    if (strlen($celular) === 0) {
        $erros[] = "Celular deve ser preenchido.";
    }

    if (strlen($endereco) === 0) {
        $erros[] = "Endereço deve ser preenchido.";
    }

    if (strlen($fixo) === 0) {
        $erros[] = "O Fixo deve ser preenchido.";
    }

    if (!ctype_alpha($login) || strlen($login) > 6) {
        $erros[] = "O login deve conter apenas caracteres alfabéticos e ter no máximo 6 dígitos.";
    }

    if (!ctype_alpha($senha) || strlen($senha) !== 8) {
        $erros[] = "A senha deve conter exatamente 8 caracteres alfabéticos.";
    }

    // Verificar se a confirmação de senha é igual à senha
    if ($senha !== $confirmasenha) {
        $erros[] = "A confirmação de senha deve ser igual à senha.";
    }

    // Verificar se há erros
    if (count($erros) === 0) {
        // Se não houver erros, hache a senha e redirecione para a próxima página
        $sexo = $_POST['sexo'];
        $senhaHash = md5($senha);
        $sql = "INSERT INTO usuarios (nome,sexo, materno, cpf, celular, fixo, endereco, login1, senha)
                VALUES ('$nome','$sexo','$materno','$cpf', '$celular', '$fixo', '$endereco', '$login', '$senhaHash')";

        // Verifica se a Consulta SQL é executada com sucesso
        if (mysqli_query($conexao, $sql)) {
            header("Location: index01.php"); // Redireciona para a página de login
            exit();
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }
    }
}




?>


<html lang="pt-br">

<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="TeleCall" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style0.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="" defer></script>
    
    
    <title>TELECALL : Cadastro-se</title>
</head>



<body>

    <!-- Formulario de Cadastro Usuario -->
    <h2>Cadastrar Novo Usuário Telecall </h2>
    <div><?php 
    if (!empty($erros)): ?>
     <ul>
     <?php foreach($erros as $erro):// Exibe a array de erro ?>
       <li><?php  echo $erro; ?> </li>
     <?php endforeach; ?>
     </ul>
    <?php endif; ?>
    </div>
    <form  action="" id="formulario"  method="POST" >
      <label for="nome">Nome:</label><br>
      <input type="text" id="nome" name="nome"><br><br>
  
      <label for="data_nascimento" >Data de Nascimento:</label><br>
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

      
      <label for="icon_telephone">Telefone Celular:</label><br>
      <input type="tel" id="icon_telephone" name="telefone_celular" class="validate"><br><br>
     
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
  
      <button type="submit"  name="enviar-formulario" id="enviar-formulario" >Enviar</button>
      <button type="reset">Limpar Tela</button>
    </form>

    <div id="avisos"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>






</html>