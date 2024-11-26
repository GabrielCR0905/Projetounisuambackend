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
    $dtnasc = $_POST['data_nascimento'];

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
        $sql = "INSERT INTO usuarios (nome,sexo,dtnasc, materno, cpf, celular, fixo, endereco, login1, senha)
                VALUES ('$nome','$sexo','$dtnasc','$materno','$cpf', '$celular', '$fixo', '$endereco', '$login', '$senhaHash')";

        // Verifica se a Consulta SQL é executada com sucesso
        if (mysqli_query($conexao, $sql)) {
            header("Location: index1.php"); // Redireciona para a página de login
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
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="" defer></script>
    
    <title>Cadastro TeleCall</title>
</head>
<style>
    body{background-color: #fff;}

    ul{
        color: brown;
    }
</style>

<body>
    <header>
        <nav>
          <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">
      
          <ul class="menunav">
      
           
            
            
      
          </ul>
      
        </nav>
      </header>
    <div class="container">
    <div><?php 
    if (!empty($erros)): ?>
     <ul>
     <?php foreach($erros as $erro):// Exibe a array de erro ?>
       <li><?php  echo $erro; ?> </li>
     <?php endforeach; ?>
     </ul>
    <?php endif; ?>
    </div>
        </div>
        <div class="form1">
            <form id="name-form"  action="" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="username">Nome Completo</label>
                        <input id="username" type="text" name="nome"  placeholder=" Campo de conter 15 caracteres">
                        <div class="msg"></div>
                        
                    </div>
                    <div class="input-box">
                        <label for="name2">Nome Materno</label>
                        <input id="name2" type="text" name="nome_materno" placeholder=" Campo deve conter 15 caracteres"  >
                        <div class="msg2"></div>
                    </div>
                    

                    <div class="input-box">
                        <label for="date">Data de Nascimento</label>
                        <input id="date" type="date" name="data_nascimento"  >
                        <div class="msg3"></div>
                    </div>
                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="number" name="cpf"  placeholder="digite o CPF" >
                        <div class="msg4"></div>
                    </div>
                    <div class="input-box">
                        <label for="endereço">Endereço Completo</label>
                        <input id="endereço" type="text" name="endereco" placeholder="Digite o Enrereço"  >
                        <div class="msg5"></div>
                    </div>
                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="tel" name="telefone_celular"  placeholder=" Número do seu Celular" >
                        <div class="msg6"></div>
                    </div>
                    <div class="input-box">
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="tel" name="telefone_fixo"  placeholder="Número de Local de Preferencia"  >
                        <div class="msg7"></div>
                    </div>

                    <div class="input-box">
                        <label for="login">Login</label>
                        <input id="login" type="login" name="login" placeholder="Digite um Login"  >
                        <div class="msg8"></div>
                    </div>
                     
                    

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" placeholder="Digite a senha">
                        <div class="msg9"></div>
                    </div>
                    <div class="input-box">
                        <label for="passwordtwo">Confirmar Senha</label>
                        <input id="passwordtwo" type="password" name="confirmar_senha"  placeholder=" Senha devem ser iguais" >
                        <div class="msg10"></div>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="sexo" value="Feminino"> 
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="sexo" value="Masculino">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="sexo" value="Outros">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="sexo" value="Prefiro não dizer">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>
                
                <div class="continue-button">
                    <input  type="submit" id="submit" name="enviar-formulario" value="Enviar">
                </div>
            </form>
        </div>
    </div>
    
</body>

</html>