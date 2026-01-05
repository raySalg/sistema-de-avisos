  <?php
      require_once("topo.php");
  ?>

      <main class="flex-grow-1 d-flex justify-content-center align-items-center " style="padding-top: 80px; padding-bottom: 40px;">
        <img src="../foto/fatec-etec-sao-sebastiao.jpg" class="img-fluid position-fixed top-0 start-0 w-100 h-100 blur-fundo" style="object-fit: cover; z-index: -1;" alt="Background">
      <div class="container p-5 rounded-3 blur border border-5">
        <h2 class="text-white mb-4 text-left">Adicionar Notícia</h2>
        <div class="row g-4 justify-content-center">
          
          <!-- Coluna principal -->
          <div class="col-lg-8">
            <div class="card shadow p-4">
              <form>
                <div class="mb-3">
                  <label for="titulo" class="form-label">Título:</label>
                  <input type="text" class="form-control" id="titulo" placeholder="Insira o título da notícia" autofocus>
                </div>

                <div class="mb-3">
                  <label for="conteudo" class="form-label">Conteúdo:</label>
                  <textarea class="form-control" id="conteudo" rows="6" placeholder="Texto da notícia"></textarea>
                </div>

                <div class="d-flex gap-2">
                  <button type="submit" class="btn btn-success">Enviar</button>
                  <button type="button" class="btn btn-warning">Visualizar</button>
                </div>
              </form>
            </div>
          </div>

          <!-- Coluna lateral -->
          <div class="col-lg-4">
            
            <!-- Card de publicação -->
            <div class="card shadow p-4 mb-4">
              <h5 class="card-title">Publicação:</h5>
              <div class="mb-3">
                <label class="form-label">Será publicado em:</label>
                <input type="datetime-local" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Será retirado em:</label>
                <input type="datetime-local" class="form-control">
              </div>
            </div>

            <!-- Card de imagem -->
            <div class="card shadow p-4">
              <h5 class="card-title">Imagem:</h5>
              <div class="mb-3">
                <input type="file" class="form-control">
              </div>
              <img src="https://via.placeholder.com/300x150" class="img-fluid rounded" alt="Prévia da imagem">
            </div>

          </div>
        </div>
      </div>
    </main>
  <?php

                // date_default_timezone_set('America/Sao_Paulo');
                // if(isset($_POST['Visualizar'])){
                //     $_SESSION['titulo']   = $_POST['noticias_titulo'];
                //     $_SESSION['texto']  = $_POST['noticias_texto'];
                //     $_SESSION['datapubli'] = $_POST['noticias_datapubli'];
                //     $_SESSION['dataunpubli'] = $_POST['noticias_dataunpubli'];
                //     $_SESSION['data'] = date('Y-m-d H:i:s');

                //     if(isset($_FILES['noticias_foto']) && !empty($_FILES['noticias_foto'])){
                //         $_SESSION['foto'] = $_FILES['noticias_foto']["name"];
                //         move_uploaded_file($_FILES["noticias_foto"]["tmp_name"] , "../../img/uploads/" . $_SESSION['foto']);
                //     }
                //     else{
                //         $_SESSION['foto'] = "";
                //     }

                //     header ("location: visualizar.php" );
                // }

                // if(isset($_POST['enviar'])){
                //     $titulo   = $_POST['noticias_titulo'];
                //     $texto  = $_POST['noticias_texto'];
                //     $datapubli = $_POST['noticias_datapubli'];
                //     $dataunpubli = $_POST['noticias_dataunpubli'];
                //     $data = date('Y-m-d H:i:s');

                //     if(isset($_FILES['noticias_foto']) && !empty($_FILES['noticias_foto'])){
                //         $foto = $_FILES['noticias_foto']["name"];
                //         move_uploaded_file($_FILES["noticias_foto"]["tmp_name"] , "../../img/uploads/" . $foto);
                //     }
                //     else{
                //         $foto = "";
                //     }

                //     $inserir = "INSERT INTO noticias(
                //         noticias_titulo,
                //         noticias_texto,
                //         noticias_data,
                //         noticias_datapubli,
                //         noticias_dataunpubli,
                //         noticias_foto,
                //         noticias_status
                //     )VALUES(
                //         '$titulo',
                //         '$texto',
                //         '$data',
                //         '$datapubli',
                //         '$dataunpubli',
                //         '$foto',
                //         'A'
                //     )"; 

                //     if($conecta->query($inserir)){
                //         echo "<script>alert('Notícia Criada com Sucesso!');";
                //         echo "window.location='criar.php';</script>";
                //     }else{
                //         echo "<script>alert('Erro!');";
                //         echo "window.location='criar.php';</script>";
                //     }
                // }

      require_once("rodopé.php");
  ?>