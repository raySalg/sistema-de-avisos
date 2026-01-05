<?php
    define("HOST", "localhost");
    define("USUARIO", "etecsaosebastiao_avisos");
    define("SENHA", "$)2HDTu)vH");
    define("BANCO", "etecsaosebastiao_avisos");

        #CODIGO DE TESTE PARA VERIFICAR A CONEXÃO
    // $mysqli = new mysqli (HOST, USUARIO, SENHA, BANCO);

    // if(!$mysqli -> connect_errno){
    //     echo "ok!";
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light border-bottom border-body fixd-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="foto/etec_sao_sebastiao.png" alt="Logo da Etec e do Estado de São Paulo" width="200" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Conteúdo central -->
  <main class="flex-grow-1 d-flex justify-content-center align-items-center mb-5 pb-2">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
      <h2 class="text-center mb-4">Login</h2>
      <form>
        <div class="mb-3">
          <input type="text" class="form-control" name="usuarios_nome" placeholder="Digite seu usuário" autofocus>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" name="usuarios_senha" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-dark w-100" name="enviar">Entrar</button>
      </form>
    </div>
  </main>

  <?php
        if(isset($_POST['usuarios_nome'])  || isset($_POST['usuarios_senha'])){

            if(strlen($_POST['usuarios_nome']) == 0){
                echo "Preencha seu nome de usuário";
            }
            else if(strlen($_POST['usuarios_senha']) == 0){
                echo "Preencha sua senha de usuário";
            } 
            
            else {

                $nome = $conecta->real_escape_string($_POST['usuarios_nome']);
                $senha = $conecta->real_escape_string($_POST['usuarios_senha']);
                $select = "SELECT * FROM usuarios WHERE usuarios_nome = '$nome' AND usuarios_senha = '$senha'";
                $puxa = $conecta->query($select) or die("Falha na consulta SQL" . $conecta->error);

                if ($puxa->num_rows > 0) {

                    $usuario = $puxa->fetch_assoc();

                    if(!isset($_SESSION)){
                        session_start();     
                    } 

                    $_SESSION['id'] = $usuario['usuarios_id'];
                    $_SESSION['nome'] = $usuario['usuarios_nome'];

                    header("Location: criar.php"); 

                } else {
                        echo "<p> Falha ao logar: Email ou senha incorretos. </p>" ;
                    }
            }
        }
  ?>

  <!-- Rodapé -->
  <footer class="bg-dark text-white text-center py-2 mt-auto">
    <small>&copy; 2024 1º ano de Desenvolvimento de Sistemas. Todos os direitos reservados.</small>
  </footer>

</body>
</html>
<?php
    // $mysqli->close();
?>