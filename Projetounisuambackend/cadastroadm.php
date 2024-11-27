<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


<?php 
include ("conexao.php");// inclua o arquivo de conexão para se conectar ao banco de  dados

$usuario = $_POST['data'];

$dados = json_decode($usuario, true);

var_dump($dados);
// Recupere os dados da Solicitação POST
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$materno = $_POST['nome_materno'];
$cpf = $_POST['cpf'];
$celular = $_POST['telefone_celular'];
$fixo = $_POST['telefone_fixo'];
$endereco = $_POST['endereco'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$dtnasc = $_POST['data_nascimento'];



 // Crie Uma Consulta SQL para Inserir os Dados do Usuário na tabela 'usuario'
$sql = "INSERT INTO  usuarios (nome, sexo,dtnasc, materno, cpf, celular, fixo, endereco, login1, senha)
        VALUES ('$nome', '$sexo','$dtnasc', '$materno','$cpf', '$celular', '$fixo', '$endereco', '$login', md5('$senha'))";

$senha = md5($senha); // Hache a senha usando MD5


// Verifica se a Consulta SQL é executada com sucesso
if (mysqli_query($conexao, $sql)) {
    header("Location: indexadm.php"); // Se for bem-sucedido, redireciona para pagina de login
    exit();
} else {
    echo "Erro: " . mysqli_error($conexao);
} 


?>




 
