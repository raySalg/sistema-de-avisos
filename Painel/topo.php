<?php
    define("HOST", "localhost");
    define("USUARIO", "root");
    define("SENHA", "");
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
  <title>Painel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  .blur {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }
</style>
<body class="d-flex flex-column min-vh-100 bg-light ">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-light border-bottom border-body fixd-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">
        <img src="../foto/etec_sao_sebastiao.png" alt="Logo da Etec e do Estado de São Paulo" width="200" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>