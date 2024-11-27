
<?php


include_once('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

require_once 'dompdf/dompdf/autoload.inc.php'; // Inclui a Biblioteca DomPDF



use Dompdf\Dompdf;


// Cria uma Sting HTML para a tabela de usuario
$HTML = '<table>';
$HTML .= '<thead>';
$HTML .= '<tr>';
$HTML .= '<th>Nome</th>';
$HTML .= '<th>Sexo</th>';
$HTML .= '<th>Nascimento</th>';
$HTML .= '<th>Materno</th>';
$HTML .= '<th>CPF</th>';
$HTML .= '<th>Celular</th>';
$HTML .= '<th>Fixo</th>';
$HTML .= '<th>Endereco</th>';
$HTML .= '<th>Login</th>';
$HTML .= '<th>Senha</th>';
$HTML .= '</tr>';
$HTML .= '</thead>';
$HTML .= '<tbody>';
$lista = mysqli_query($conexao, "SELECT * FROM usuarios"); // Consulta os usuarios no banco de dados e adiciona suas informaçoes a tabela HTML
while ($dados = mysqli_fetch_array($lista)) {

$HTML .= '<tr>';
$HTML .= '<td>' . $dados['nome'] . '</td>';
$HTML .= '<td>' . $dados['sexo'] . '</td>';
$HTML .= '<td>' . $dados['dtnasc'] . '</td>';
$HTML .= '<td>' . $dados['materno'] . '</td>';
$HTML .= '<td>' . $dados['cpf'] . '</td>';
$HTML .= '<td>' . $dados['celular'] . '</td>';
$HTML .= '<td>' . $dados['fixo'] . '</td>';
$HTML .= '<td>' . $dados['endereco'] . '</td>';
$HTML .= '<td>' . $dados['login1'] . '</td>';
$HTML .= '<td>' . $dados['senha'] . '</td>';
$HTML .= '</tr>';

}
$HTML .= '</tbody>';
$HTML .= '</table>';

$dompdf = new Dompdf(); // Cria uma instancia da classe domdpf
// Carrega o HTML gerado no PDF
$dompdf->loadHtml('
    <h1>Relatorio de Usuarios</h1> 
    ' .$HTML);

$dompdf->render();// Renderiza o PDF
//Gera o PDF para exibição ou Download
$dompdf->stream(
    "Lista de Usuários",
    array(
        "attachment" => false
    )
);
?>
