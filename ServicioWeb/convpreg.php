<?php

    session_start(); // Start the session

    include 'conexion.php';

    $tituloConvocatoria = $_POST['tituloConvocatoria'];
    $ListaChequeo = '';
    $estimuloEconomico = '';
    $publicacionConvocatoria = '';
    $resultadosFinales = '';
    $actaResultados = '';
    $certificadoEstudio = '';
    $cartaPresentacion = '';
    $declaracionPostura = '';
    $cedula = '';
    $carnetEstudiantil = '';
    $justificacion = '';

    // Procesa el documento requerido 1
    if (isset($_FILES["ListaChequeo"])) {
        $ListaChequeo = $_FILES["ListaChequeo"];
        $numFilesUno = count($ListaChequeo["name"]);

        for ($i = 0; $i < $numFilesUno; $i++) {
            $nombre = $ListaChequeo["name"][$i];
            $tipo = $ListaChequeo["type"][$i];
            $ruta_provisional = $ListaChequeo["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $ListaChequeo = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 2
    if (isset($_FILES["estimuloEconomico"])) {
        $estimuloEconomico = $_FILES["estimuloEconomico"];
        $numFilesDos = count($estimuloEconomico["name"]);

        for ($i = 0; $i < $numFilesDos; $i++) {
            $nombre = $estimuloEconomico["name"][$i];
            $tipo = $estimuloEconomico["type"][$i];
            $ruta_provisional = $estimuloEconomico["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $estimuloEconomico = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 3
    if (isset($_FILES["publicacionConvocatoria"])) {
        $publicacionConvocatoria = $_FILES["publicacionConvocatoria"];
        $numFilesTres = count($publicacionConvocatoria["name"]);

        for ($i = 0; $i < $numFilesTres; $i++) {
            $nombre = $publicacionConvocatoria["name"][$i];
            $tipo = $publicacionConvocatoria["type"][$i];
            $ruta_provisional = $publicacionConvocatoria["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $publicacionConvocatoria = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 4
    if (isset($_FILES["resultadosFinales"])) {
        $resultadosFinales = $_FILES["resultadosFinales"];
        $numFilesCuatro = count($resultadosFinales["name"]);

        for ($i = 0; $i < $numFilesCuatro; $i++) {
            $nombre = $resultadosFinales["name"][$i];
            $tipo = $resultadosFinales["type"][$i];
            $ruta_provisional = $resultadosFinales["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $resultadosFinales = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 5
    if (isset($_FILES["actaResultados"])) {
        $actaResultados = $_FILES["actaResultados"];
        $numFilesCinco = count($actaResultados["name"]);

        for ($i = 0; $i < $numFilesCinco; $i++) {
            $nombre = $actaResultados["name"][$i];
            $tipo = $actaResultados["type"][$i];
            $ruta_provisional = $actaResultados["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $actaResultados = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 6
    if (isset($_FILES["certificadoEstudio"])) {
        $certificadoEstudio = $_FILES["certificadoEstudio"];
        $numFilesSeis = count($certificadoEstudio["name"]);

        for ($i = 0; $i < $numFilesSeis; $i++) {
            $nombre = $certificadoEstudio["name"][$i];
            $tipo = $certificadoEstudio["type"][$i];
            $ruta_provisional = $certificadoEstudio["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $certificadoEstudio = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 7
    if (isset($_FILES["cartaPresentacion"])) {
        $cartaPresentacion = $_FILES["cartaPresentacion"];
        $numFilesSiete = count($cartaPresentacion["name"]);

        for ($i = 0; $i < $numFilesSiete; $i++) {
            $nombre = $cartaPresentacion["name"][$i];
            $tipo = $cartaPresentacion["type"][$i];
            $ruta_provisional = $cartaPresentacion["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $cartaPresentacion = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 8
    if (isset($_FILES["declaracionPostura"])) {
        $declaracionPostura = $_FILES["declaracionPostura"];
        $numFilesOcho = count($declaracionPostura["name"]);

        for ($i = 0; $i < $numFilesOcho; $i++) {
            $nombre = $declaracionPostura["name"][$i];
            $tipo = $declaracionPostura["type"][$i];
            $ruta_provisional = $declaracionPostura["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $declaracionPostura = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 9
    if (isset($_FILES["cedula"])) {
        $cedula = $_FILES["cedula"];
        $numFilesNueve = count($cedula["name"]);

        for ($i = 0; $i < $numFilesNueve; $i++) {
            $nombre = $cedula["name"][$i];
            $tipo = $cedula["type"][$i];
            $ruta_provisional = $cedula["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $cedula = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 10
    if (isset($_FILES["carnetEstudiantil"])) {
        $carnetEstudiantil = $_FILES["carnetEstudiantil"];
        $numFilesDiez = count($carnetEstudiantil["name"]);

        for ($i = 0; $i < $numFilesDiez; $i++) {
            $nombre = $carnetEstudiantil["name"][$i];
            $tipo = $carnetEstudiantil["type"][$i];
            $ruta_provisional = $carnetEstudiantil["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $carnetEstudiantil = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 11
    if (isset($_FILES["justificacion"])) {
        $justificacion = $_FILES["justificacion"];
        $numFilesOnce = count($justificacion["name"]);

        for ($i = 0; $i < $numFilesOnce; $i++) {
            $nombre = $justificacion["name"][$i];
            $tipo = $justificacion["type"][$i];
            $ruta_provisional = $justificacion["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $justificacion = "archivo/" . $nombre . ";";
        }
    }

    // Insert the form data into the "documentos" table
    $query = "INSERT INTO convpregrado(tituloConvocatoria, ListaChequeo, estimuloEconomico, publicacionConvocatoria, resultadosFinales, actaResultados, certificadoEstudio, cartaPresentacion, declaracionPostura, cedula, carnetEstudiantil, justificacion) 
            VALUES('$tituloConvocatoria', '$ListaChequeo', '$estimuloEconomico', '$publicacionConvocatoria', '$resultadosFinales', '$actaResultados', '$certificadoEstudio', '$cartaPresentacion', '$declaracionPostura', '$cedula', '$carnetEstudiantil', '$justificacion')";

    $ejecutar = mysqli_query($conexion, $query);

     // Store the value of convocatoriaTitle in a session variable
     $_SESSION['tituloConvocatoria_file1'] = $tituloConvocatoria;
     $_SESSION['tituloConvocatoria_file2'] = $tituloConvocatoria;

    // Retrieve all titles from the database
    $querytitulo = "SELECT tituloConvocatoria FROM convpregrado";
    $result = mysqli_query($conexion, $querytitulo);
    $titles = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $titles[] = $row['tituloConvocatoria'];
    }

    // Debug statements
    echo "Titles Array:";
    print_r($titles);

    // Redirect to the subir.php file and pass the titles as a session variable
    $_SESSION['titles'] = $titles;
    header("Location: subir.php");
    exit();
?>