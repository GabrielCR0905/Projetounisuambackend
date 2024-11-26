<!DOCTYPE html>
<?php
session_start();
include_once 'conexao.php';


?>
  <html>
    <head>

      <meta charset="utf-8">
      <title>Sistema CRUD</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="assets/css/admsty.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="#cfd8dc blue-grey lighten-4">
      <header>
        <nav>
          <img class="logo" src="assets/img/telecall.png" alt="Logo da TeleCall">
      
          <ul class="menunav">
      
            
            <li><a href="index3.php">Página Inicial</a></li>
            <a href="logout.php" > Sair</a>
      
          </ul>
      
        </nav>
      </header>

    <div class="row">
       <div class="col s12 m6 push-m1 ">
        <h3 class="light">Clientes</h3>
          <table class="striped">
            <thead>
                <tr>
                  <th>Nome:</th>
                  <th>Sexo:</th>
                  <th>Nascimento:</th>
                  <th>Materno:</th>
                  <th>CPF:</th>
                  <th>Celular:</th>
                  <th>Fixo:</th>
                  <th>Enredeço:</th>
                  <th>Login:</th>
                  <th>Senha:</th>
                </tr>
            </thead>

            <tbody>
              <?php
              $sql = " SELECT * FROM usuarios"; // Seleciona todos os registros da tabela usuarios
              $resultado =mysqli_query($conexao, $sql);
              while($dados = mysqli_fetch_array($resultado)):  // loop atraves do conjunto de resultados
              ?>
                <tr> <!-- Exibe  as informaçoes do usuario em celulas de tabela -->
                  <td><?php echo $dados['nome']; ?></td>
                  <td><?php echo $dados['sexo']; ?></td>
                  <td><?php echo $dados['dtnasc'];?></td>
                  <td><?php echo $dados['materno']; ?></td>
                  <td><?php echo $dados['cpf']; ?></td>
                  <td><?php echo $dados['celular']; ?></td>
                  <td><?php echo $dados['fixo']; ?></td>
                  <td><?php echo $dados['endereco']; ?></td>
                  <td><?php echo $dados['login1']; ?></td>
                  <td><?php echo $dados['senha']; ?></td>                    <!--Pega o ID do usuario para fazer a alteração  -->
                  <td><a href="editar.php?idusuario=<?php echo $dados ['idusuario']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                                                                             <!-- Pega o ID do usuario para fazer a Exclusão  -->
                  <td><a href="#modal <?php echo $dados ['idusuario']; ?>" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></a></td>


                  <!-- Estrutura do Modal -->
  <div id="modal <?php echo $dados ['idusuario']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa!</h4>
      <p>Tem certeza que deseja Excluir esse Cliente?</p>
    </div>
    <div class="modal-footer">
      

      <form  action="delete.php" method="POST"> <!--  Formulario para lidar com  a ação de exclusao -->
        <input type="hidden" name="idusuario" value="<?php echo $dados ['idusuario']; ?>">
        <button type="submit" name="btn-deletar" class="btn red">Sim, Quero Deletar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
      </form>
    </div>
  </div>
                </tr>

                
                <?php endwhile; ?>
            </tbody>

          </table>
          <!-- Links  para adicionar um novo usuario e imprimir pdf -->
          <a href="formadm.php" class="btn"> Adicionar Cliente</a>
          <a href="rel.usu.php" class="btn green">Imprimir PDF</a>
       </div>
    </div>







      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script>
        M.AutoInit();
      </script>
    </body>
  </html>
        