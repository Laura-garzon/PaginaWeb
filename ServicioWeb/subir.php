<?php
  session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Subir documentos - Convocatoria</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!--HEADER INICIO-->
    <div class="logo">
      <img src="imagenes/logou.png" alt="Logo de la empresa">
    </div>
    <h1>Universidad Militar Nueva Granada</h1>
  </header>
  <!--HEADER FINAL-->
  <div class="botones">
    <a href="convpreg.html"><button onclick="seleccionarConvocatoria('pregrado')">Añadir una convocatoria para asistente de pregrado</button></a>
    <a href="convpos.html"><button onclick="seleccionarConvocatoria('posgrado')">Añadir una convocatoria para asistente de posgrado</button></a>
  </div>
 
  <div class="container">
    <div class="column">
      <h2>CONVOCATORIAS CREADAS</h2>
      <?php
    // Check if convocatoriaTitle is stored in the session for file1.php
    if (isset($_SESSION['tituloConvocatoria_file1'])) {
      // Retrieve the convocatoriaTitle from the session
      $convocatoriaTitle = $_SESSION['tituloConvocatoria_file1'];
    }

      // Check if titles are stored in the session
      if (isset($_SESSION['titles'])) {
          // Loop through the titles and display them
          foreach ($_SESSION['titles'] as $title) {
              echo '<button>' . $title . '</button>';
          }
    }
    ?>
    </div>
    
    <div class="column">
      <h2>POSTULACIONES</h2>
      <a href="comentarios.html"><button type="button">Postulación</button></a>
    </div>
  </div>

</body>
</html>
