<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Diseño De Pagina Web</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo2.css">
  <link rel="stylesheet" href="../css/estilo3.css">
  <link rel="stylesheet" href="../css/estilomovil.css">
  <style>
    .fade-in {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    .fade-in.show {
      opacity: 1;
    }
  </style>
</head>
<body>
  <!-- Flecha para volver al inicio -->
  <a href="../index.php" class="back-to-top">&#8593;</a>

  <div class="banner">
    <div class="navbar">
      <img src="../imagenes/pngwing.com (2).png" class="logo">
      <nav id="desktop-nav">
        <ul class="nav-links">
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="../contactos/index.php">Contactanos</a></li>
        </ul>
      </nav>
      <nav id="hamburger-nav">
        <div class="hamburger-menu">
          <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="menu-links">
            <li><a href="../index.php" onclick="toggleMenu()">Inicio</a></li>
            <li><a href="../contactos/index.php" onclick="toggleMenu()">Contactanos</a></li>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="content">
    <section class="profile-section">
      <img src="../imagenes/bienvenido.gif" class="profile-image fade-in" alt="YO">
      <div class="profile-text">
        <h1>Hola, Soy Milagros Urssino</h1>
        <p>Estudiante de Diseño y Animación Digital en la UB</p>
        <p>La carrera ofrece una amplia gama de conocimientos y habilidades en el campo del diseño digital y la animación. Los estudiantes exploran conceptos fundamentales de diseño gráfico y digital, adquiriendo destrezas en software especializado como Adobe Photoshop e Illustrator. Además, se sumergen en el mundo de la animación, aprendiendo técnicas tanto en 2D como en 3D, desde storyboard hasta efectos visuales.</p>
        <p>Los estudiantes tienen la oportunidad de participar en proyectos creativos prácticos y realizar pasantías profesionales para adquirir experiencia laboral en la industria. Esta combinación de teoría y práctica prepara a los estudiantes para enfrentar los desafíos del campo del diseño y la animación, brindándoles las habilidades necesarias para destacarse en este apasionante sector.</p>
        <hr>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.fade-in').addClass('show');
    });
  </script>
</body>
</html>

<?php
echo "Index de inicio.php cargado.";
?>