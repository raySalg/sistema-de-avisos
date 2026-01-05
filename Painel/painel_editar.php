<?php
    require_once("topo.php");

        // $id = $_GET['id'];
        // $select = "SELECT * FROM noticias WHERE noticias_id = '$id'";
        // $puxa = $conecta->query($select);
        // $mostra = $puxa->fetch_object();
        // echo $mostra->noticias_titulo . "<br>";
        // echo $mostra->noticias_texto . "<br>";
        // echo $mostra->noticias_data . "<br>"; 
        // echo "<img src='" . $mostra->noticias_foto . "'> " ."<br>";
        // if($mostra->noticias_status == "A"){
        //     $status = "Ativo";
        // }else{
        //     $status = "Inativo";
        // }
        // echo $status . "<br>";
        // echo "<a href='painel.php'><button>Voltar</button></a>";

 ?>

    <main class="flex-grow-1 d-flex justify-content-center align-items-center " style="padding-top: 80px; padding-bottom: 40px;">
      <img src="../foto/fatec-etec-sao-sebastiao.jpg" class="img-fluid position-fixed top-0 start-0 w-100 h-100 blur-fundo" style="object-fit: cover; z-index: -1;" alt="Background">
    <div class="container p-5 rounded-3 blur border border-5">
      <h2 class="text-white mb-4 text-left">Editar Notícia</h2>
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
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="button" class="btn btn-warning">Excluir</button>
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
    require_once("rodopé.php");
?>