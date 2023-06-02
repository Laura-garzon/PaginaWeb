<?php

    session_start(); // Start the session

    include 'conexion.php';

    $tituloConvocatoria = $_POST['tituloConvocatoria'];
    $ListaChequeo = '';
    $estimuloEconomico = '';
    $publicacionConvocatoria = '';
    $resultadosFinales = '';
    $actaEvaluacion = '';
    $certificadoEstudio = '';
    $certificadoRegistroUno = '';
    $certificadoRegistroDos = '';
    $presentacionPostulante = '';
    $cartaPresentacion = '';
    $cartaAutodeclaracion = '';
    $planTrabajo = '';
    $cedula = '';
    $carnetEstudiantil = '';
    $justificacion = '';
    $requisicionUnivex = '';

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
    if (isset($_FILES["actaEvaluacion"])) {
        $actaEvaluacion = $_FILES["actaEvaluacion"];
        $numFilesCinco = count($actaEvaluacion["name"]);

        for ($i = 0; $i < $numFilesCinco; $i++) {
            $nombre = $actaEvaluacion["name"][$i];
            $tipo = $actaEvaluacion["type"][$i];
            $ruta_provisional = $actaEvaluacion["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $actaEvaluacion = "archivo/" . $nombre . ";";
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
    if (isset($_FILES["certificadoRegistroUno"])) {
        $certificadoRegistroUno = $_FILES["certificadoRegistroUno"];
        $numFilesSeis = count($certificadoRegistroUno["name"]);

        for ($i = 0; $i < $numFilesSeis; $i++) {
            $nombre = $certificadoRegistroUno["name"][$i];
            $tipo = $certificadoRegistroUno["type"][$i];
            $ruta_provisional = $certificadoRegistroUno["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $certificadoRegistroUno = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 8
    if (isset($_FILES["certificadoRegistroDos"])) {
        $certificadoRegistroDos = $_FILES["certificadoRegistroDos"];
        $numFilesSeis = count($certificadoRegistroDos["name"]);

        for ($i = 0; $i < $numFilesSeis; $i++) {
            $nombre = $certificadoRegistroDos["name"][$i];
            $tipo = $certificadoRegistroDos["type"][$i];
            $ruta_provisional = $certificadoRegistroDos["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $certificadoRegistroDos = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 9
    if (isset($_FILES["presentacionPostulante"])) {
        $presentacionPostulante = $_FILES["presentacionPostulante"];
        $numFilesSiete = count($presentacionPostulante["name"]);

        for ($i = 0; $i < $numFilesSiete; $i++) {
            $nombre = $presentacionPostulante["name"][$i];
            $tipo = $presentacionPostulante["type"][$i];
            $ruta_provisional = $presentacionPostulante["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $presentacionPostulante = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 10
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

    // Procesa el documento requerido 11
    if (isset($_FILES["cartaAutodeclaracion"])) {
        $cartaAutodeclaracion = $_FILES["cartaAutodeclaracion"];
        $numFilesOcho = count($cartaAutodeclaracion["name"]);

        for ($i = 0; $i < $numFilesOcho; $i++) {
            $nombre = $cartaAutodeclaracion["name"][$i];
            $tipo = $cartaAutodeclaracion["type"][$i];
            $ruta_provisional = $cartaAutodeclaracion["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $cartaAutodeclaracion = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 12
    if (isset($_FILES["planTrabajo"])) {
        $planTrabajo = $_FILES["planTrabajo"];
        $numFilesOcho = count($planTrabajo["name"]);

        for ($i = 0; $i < $numFilesOcho; $i++) {
            $nombre = $planTrabajo["name"][$i];
            $tipo = $planTrabajo["type"][$i];
            $ruta_provisional = $planTrabajo["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $planTrabajo = "archivo/" . $nombre . ";";
        }
    }

    // Procesa el documento requerido 13
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

    // Procesa el documento requerido 14
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

    // Procesa el documento requerido 15
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

    // Procesa el documento requerido 16
    if (isset($_FILES["requisicionUnivex"])) {
        $requisicionUnivex = $_FILES["requisicionUnivex"];
        $numFilesOnce = count($requisicionUnivex["name"]);

        for ($i = 0; $i < $numFilesOnce; $i++) {
            $nombre = $requisicionUnivex["name"][$i];
            $tipo = $requisicionUnivex["type"][$i];
            $ruta_provisional = $requisicionUnivex["tmp_name"][$i];
            $carpeta = "archivo/";

            $scr = $carpeta . $nombre;
            move_uploaded_file($ruta_provisional, $scr);

            // Guarda el documento en la carpeta de archivo y crea su ruta
            $requisicionUnivex = "archivo/" . $nombre . ";";
        }
    }

    // Insert the form data into the "documentos" table
    $query = "INSERT INTO convposgrado(tituloConvocatoria, ListaChequeo, estimuloEconomico, publicacionConvocatoria, resultadosFinales, actaEvaluacion, certificadoEstudio, certificadoRegistroUno, certificadoRegistroDos, presentacionPostulante, cartaPresentacion, cartaAutodeclaracion, planTrabajo, cedula, carnetEstudiantil, justificacion, requisicionUnivex) 
            VALUES('$tituloConvocatoria', '$ListaChequeo', '$estimuloEconomico', '$publicacionConvocatoria', '$resultadosFinales', '$actaEvaluacion', '$certificadoEstudio', '$certificadoRegistroUno', '$certificadoRegistroDos', '$presentacionPostulante', '$cartaPresentacion', '$cartaAutodeclaracion', '$planTrabajo', '$cedula', '$carnetEstudiantil', '$justificacion', '$requisicionUnivex')";

    $ejecutar = mysqli_query($conexion, $query);

    // Store the value of convocatoriaTitle in a session variable
    $_SESSION['tituloConvocatoria'] = $tituloConvocatoria;

    // Retrieve all titles from the database
    $querytitulo = "SELECT tituloConvocatoria FROM convposgrado";
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