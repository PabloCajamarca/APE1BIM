<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi sitio personal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
  <div class="container">
    
    <a class="navbar-brand fw-bold" href="#">
      Mi Página Personal
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" active href="contacto.html">Contacto</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<!-- SECCION PRINCIPAL -->
<div class="container mt-5">

  <div class="row align-items-center g-5">

    <!-- FOTO -->
    <div class="col-md-4 text-center">

      <img src="img/foto.jpg"
           class="img-fluid rounded-circle shadow-lg"
           alt="Foto de perfil"
           width="280">

    </div>

    <!-- PRESENTACION -->
    <div class="col-md-8">

      <div class="presentacion">

        <h2 class="text-center mb-4">
          Hola mi nombre es Pablo Cajamarca
        </h2>

        <p style="text-align: justify;">
          Soy estudiante de la Universidad Técnica Particular de Loja (UTPL)
          y me apasiona aprender sobre tecnología y programación. Me considero
          una persona responsable, creativa y con muchas ganas de seguir
          adquiriendo nuevos conocimientos en el área de las tecnologías
          de la información.
        </p>

        <p style="text-align: justify;">
          Entre mis hobbies favoritos están el ciclismo y la natación,
          actividades que me ayudan a mantenerme activo y disfrutar de mi
          tiempo libre. También me gusta explorar nuevas herramientas
          digitales, aprender sobre desarrollo web y mejorar mis habilidades
          en programación.
        </p>

        <p style="text-align: justify;">
          En este sitio encontrarás información sobre mí, mis intereses y
          algunos de los proyectos que he realizado. Además, encontrarás un
          formulario de contacto para que puedas enviarme un mensaje,
          realizar alguna consulta o compartir tus comentarios.
        </p>

      </div>

    </div>

  </div>

</div>

<!-- SEPARADOR -->
<hr class="my-5">

<!-- TARJETAS -->
<div class="container mb-5">

  <div class="row justify-content-center g-4">

    <!-- TARJETA 1 -->
    <div class="col-md-4">

      <div class="card-info text-center h-100">

        <h3 class="mb-3">Biografía corta</h3>

        <p style="text-align: justify;">
          Me considero una persona responsable, creativa y con interés
          por la tecnología. Me gusta aprender nuevas herramientas
          digitales por eso sigo tecnologías de la información en la
          Universidad Particular de Loja.
        </p>

      </div>

    </div>

    <!-- TARJETA 2 -->
    <div class="col-md-4">

      <div class="card-info text-center h-100">

        <h3 class="mb-3">Mis hobbies</h3>

        <ul class="list-unstyled">

          <li>🎵 Escuchar música</li>
          <li>🚴 Realizar deportes</li>
          <li>💻 Aprender sobre tecnología</li>
          <li>👨‍👩‍👦 Compartir tiempo con mi familia y amigos</li>

        </ul>

      </div>

    </div>

    <!-- TARJETA 3 -->
    <div class="col-md-4">

      <div class="card-info text-center h-100">

        <h3 class="mb-3">Sobre este proyecto</h3>

        <p style="text-align: justify;">
          Esta página incluye una sección de información personal y un
          formulario de contacto conectado con PHP. Los mensajes enviados
          se validan y se guardan en una base de datos MySQL.
        </p>

      </div>

    </div>

  </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-4">

    <p class="mb-1">
      &copy; <?php echo date("Y"); ?> Pablo Cajamarca
    </p>

    <small>
      Proyecto académico desarrollado con HTML, CSS, Bootstrap, PHP y MySQL.
    </small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>