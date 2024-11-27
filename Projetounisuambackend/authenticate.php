



<?php
include("conexao.php");

if (isset($_POST['enviar-2fa'])) {
    // Rota para verificar as respostas
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resposta'])) {
        $resposta = mysqli_escape_string($conexao, $_POST['resposta']);

        // Use instruções preparadas para evitar injeção de SQL
        $sql = "SELECT * FROM usuarios WHERE materno = ? OR endereco = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss", $resposta, $resposta);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Obtenha os dados do resultado
            $row = $result->fetch_assoc();

            if ($row['idusuario'] != 1) {
                // Inicie a sessão antes de acessar $_SESSION
                session_start();

                $_SESSION['logado'] = true;
                $_SESSION['id'] = $row['idusuario'];

                // Aqui, você pode realizar a lógica adicional necessária
                header('Location: index4.php');
                exit();
            }
        } else {
            echo json_encode(["success" => false, "message" => "Resposta incorreta ou usuário não encontrado."]);
        }

        $stmt->close();
    }
    $conexao->close();
}
?>
