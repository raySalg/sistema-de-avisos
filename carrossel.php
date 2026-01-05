<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrossel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .blur {
    background: rgba(0, 0, 0, 0.5); /* escurecido */
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    color: white;
  }

  .overlay-box {
    position: absolute;
    top: 20%;      /* centraliza vertical */
    right: 10%;    /* distância da lateral direita */
    transform: translateY(-50%); /* ajuste fino do centro */
    width: 600px;  /* largura fixa do quadrado */
  }
</style>
</head>
<body>   

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    
    <div class="carousel-item active position-relative">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" 
           class="img-fluid w-100 h-100" 
           style="object-fit: cover;" 
           alt="Background">

       Quadrado por cima da imagem
      <div class="overlay-box blur p-5 m-5">
        <h4><u>Notícia</u></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident esse autem, odit repudiandae porro in dignissimos vero sit molestiae beatae quas aliquam dicta et. Soluta itaque modi quos officiis iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident esse autem, odit repudiandae porro in dignissimos vero sit molestiae beatae quas aliquam dicta et. Soluta itaque modi quos officiis iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident esse autem, odit repudiandae porro in dignissimos vero sit molestiae beatae quas aliquam dicta et. Soluta itaque modi quos officiis iste.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" 
           class="img-fluid w-100 h-100" 
           style="object-fit: cover;" 
           alt="Background">
    </div>

    <div class="carousel-item">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" 
           class="img-fluid w-100 h-100" 
           style="object-fit: cover;" 
           alt="Background">
    </div>

  </div>
</div>

</body>
</html> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrossel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .carousel-item {
      height: 100vh; /* ocupa 100% da altura da tela */
    }

    .carousel-item img {
      height: 100%;
      width: 100%;
      object-fit: cover; /* preenche sem distorcer */
    }

    .blur {
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 10px;
      color: white;
    }

    .overlay-box {
      position: absolute;
      top: 50%;
      right: 10%;
      transform: translateY(-50%);
      width: 600px;
      max-width: 90%; /* evita estourar em telas pequenas */
    }

    /* Responsivo: no celular joga para o centro */
    @media (max-width: 768px) {
      .overlay-box {
        right: 50%;
        transform: translate(50%, -50%);
        width: 90%;
      }
    }
  </style>
</head>
<body>

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">

    <div class="carousel-item active position-relative">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" alt="Background">

      <div class="overlay-box blur p-4">
        <h4><u>Notícia</u></h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque unde maxime eius repellendus possimus cumque eligendi modi pariatur. Soluta praesentium ipsum laboriosam culpa distinctio magnam quisquam quos facere expedita sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque unde maxime eius repellendus possimus cumque eligendi modi pariatur. Soluta praesentium ipsum laboriosam culpa distinctio magnam quisquam quos facere expedita sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque unde maxime eius repellendus possimus cumque eligendi modi pariatur. Soluta praesentium ipsum laboriosam culpa distinctio magnam quisquam quos facere expedita sapiente.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" alt="Background">
    </div>

    <div class="carousel-item">
      <img src="foto/fatec-etec-sao-sebastiao.jpg" alt="Background">
    </div>

  </div>
</div>

</body>
</html>
