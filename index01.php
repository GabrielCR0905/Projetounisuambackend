<!DOCTYPE html>
<?php 

require_once 'conexao.php';

session_start();




// Verifica se o formulário de login foi submetido
if (isset($_POST['btn-entrar'])):
    $erros = array(); // array para armazenar mensagens de erro
    $login = mysqli_escape_string($conexao, $_POST['login1']);
    $senha = mysqli_escape_string($conexao, $_POST['senha1']); // Obtém e limpa os valores do formulário

    if (empty($login) or empty($senha)):// verifica se os campos login e senha estão vazios
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login1 FROM usuarios WHERE login1 = '$login' "; // verifica se o Login existe no banco de dados
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0): // se o login existir, realiza o hash da senha
            $senha = md5($senha);

            $sql = "SELECT * FROM usuarios WHERE login1 = '$login' AND senha = '$senha'"; // verifica se a senha corresponde a um usuário no banco de dados
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado); // se o login e senha estiverem corretos, obtém os dados do usuário

                // Verifica o ID do usuário
                if ($dados['idusuario'] != 1):
                    $_SESSION['logado'] = true;
                    $_SESSION['id'] = $dados['idusuario'];
                    header('location: index4.php'); // redireciona para outra página se o ID for diferente de 1
                    exit();
                else:
                    $_SESSION['logado'] = true;
                    $_SESSION['id'] = $dados['idusuario'];
                    header('location: index3.php'); // redireciona para a página de destino se o ID for 1
                    exit();
                endif;
            else:
                $erros[] = "<li> Usuário ou senha incorretos </li>"; // se o login ou senha estiverem incorretos, adiciona uma mensagem de erro
            endif;
        else:
            $erros[] = "<li> Usuário Inexistente </li>"; // se o login não existir, adiciona uma mensagem de erro
        endif;
    endif;
endif;
?>



<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="assets/css/style01.css">
  <script src="" defer></script>
</head>
<body>


  <div class="login-container">
    <h2>Login Telecall</h2>
    <?php 
    if (!empty($erros)):
      foreach($erros as $erro):// Exibe a array de erro
         echo $erro;
      endforeach;
    endif;
    ?>  <!-- Formulario de Login a nossa pagina -->
    <form id="loginForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label for="login">Login:</label><br>
      <input type="text" id="login1" name="login1"><br><br>
  
      <label for="senha">Senha:</label><br>
      <input type="password" id="senha1" name="senha1" autocomplete="on"><br><br>
  
      <button type="submit" name="btn-entrar">Entrar</button>
    </form>
  </div>

 
</body>
</html>




