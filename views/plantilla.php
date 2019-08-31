<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="views/assets/css/bootstrap.min.css">
  <script src="views/assets/js/sweetalert2.all.min.js"></script>
  <title>EMAIL</title>
</head>

<body>
  <header class="bg-primary text-center py-5 mb-4">
    <div class="container">
      <h1 class="font-weight-light text-white">E M A I L</h1>
    </div>
  </header>
  <div class="container">
    <form role="form" method="post" enctype="multipart/form-data">
      <div class="form-row align-items-center">
        <!-- ENTRADA PARA -->
        <div class="col-sm-6 my-1">
          <label for="paraId" class="col-form-label">Para:</label>
          <input class="form-control" type="email" id="paraId" name="para" placeholder="Para" required
            autocomplete="off">
        </div>
        <!-- ENTRADA ASUSNTO -->
        <div class="col-sm-6 my-1">
          <label for="asuntoId" class="col-form-label">Asunto:</label>
          <input class="form-control" type="text" id="asuntoId" name="asunto" placeholder="Asunto" required
            autocomplete="off">
        </div>
      </div>
      <div class="form-row align-items-center">
        <!-- ENTRADA MENSAJE -->
        <div class="col-sm-12 my-1">
          <label for="mensajeId">Mensaje:</label>
          <textarea class="form-control" id="mensajeId" name="mensaje" rows="20" placeholder="Mensaje" required></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-2">Enviar</button>

        <?php
          $enviar = new ControladorEmail();
          $enviar->ctrEnviarEmail();
        ?>
    </form>
  </div>


  
  <script src="views/assets/js/config.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="views/assets/js/jquery-3.4.1.min.js"></script>
  <script src="views/assets/js/popper.min.js"></script>
  <script src="views/assets/js/bootstrap.min.js"></script> -->
</body>

</html>