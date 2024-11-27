 <?php //Configuração do Banco de Dados
   $servidor="database-2.cluster-cgwzqom5iaex.us-east-1.rds.amazonaws.com";   // Nome do Servidor do Banco de dados
   $usuario="admin";         // Nome do usuário do Banco de dados
   $senha="inxsgabriel2";               // Senha do Banco de Dados (no caso, vazia)
   $dbname="usuarios_cadastrados"; //Nome do Banco de dados a ser Utilizado

   // Estabelece a conexão com o banco de dados usando as configurações fornecidas
   $conexao=mysqli_connect ($servidor,$usuario,$senha,$dbname); 
   
   // Verifica se a conexão foi bem-sucedida
   if (!$conexao){
      
  // Se a conexão falhar, exibe uma mensagem de erro e encerra o script
    die ("houve um erro:".mysqli_connect_error());
   }

?>
