<?php

    session_start(); // Start the session

    include 'conexion.php';

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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $ListaChequeo = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $estimuloEconomico = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $publicacionConvocatoria = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $resultadosFinales = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $actaResultados = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $certificadoEstudio = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $cartaPresentacion = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $declaracionPostura = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $cedula = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $carnetEstudiantil = "archivodocente/" . $nombre . ";";
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
            $carpeta = "archivodocente/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $justificacion = "archivodocente/" . $nombre . ";";
        }
    }

    // Insert the form data into the "documentos" table
    $query = "INSERT INTO postulacionpreg(ListaChequeo, estimuloEconomico, publicacionConvocatoria, resultadosFinales, actaResultados, certificadoEstudio, cartaPresentacion, declaracionPostura, cedula, carnetEstudiantil, justificacion) 
            VALUES('$ListaChequeo', '$estimuloEconomico', '$publicacionConvocatoria', '$resultadosFinales', '$actaResultados', '$certificadoEstudio', '$cartaPresentacion', '$declaracionPostura', '$cedula', '$carnetEstudiantil', '$justificacion')";

    $ejecutar = mysqli_query($conexion, $query);
?>