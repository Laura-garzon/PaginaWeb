<?php
// Check if the file parameter is set in the URL
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Validate the file path to prevent unauthorized access
    $filePath = 'archivo/' . basename($file);

    // Check if the file exists
    if (file_exists($filePath)) {
        // Set the appropriate headers for the file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        // File not found, handle the error
        die('File not found.');
    }
} else {
    // File parameter not provided, handle the error
    die('Invalid request.');
}
?>