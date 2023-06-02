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
 
  <div class="container">
    <div class="column">
      <h2>CONVOCATORIAS DISPONIBLES</h2>
      <?php

      // Check if convocatoriaTitle is stored in the session for file2.php
      if (isset($_SESSION['tituloConvocatoria_file2'])) {
        // Retrieve the convocatoriaTitle from the session
        $convocatoriaTitle = $_SESSION['tituloConvocatoria_file2'];

        // ... (additional code specific to file2.php)
    }

      // Check if titles are stored in the session
      if (isset($_SESSION['titles'])) {
          // Loop through the titles and display them
          foreach ($_SESSION['titles'] as $title) {
            echo '<a href="postulacionpreg.html"><button>' . $title . '</button></a>';
          }
    }
    ?>
    </div>
    
    <div class="column">
      <h2>POSTULACIONES EN PROCESO</h2>
      <!-- Add content for convocatorias en proceso -->
    </div>
  </div>

</body>
</html>