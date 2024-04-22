<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<<?php
$uploadDir = '/downloads/';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file_PDF']) && isset($_FILES['file_img'])) {
    $filePDF = $uploadDir . $_FILES['file_PDF']['name']; 
    $imagem =  $uploadDir . $_FILES['file_img']['name'];
    // Upload do arquivo PDF
    if (move_uploaded_file($_FILES['file_PDF']['tmp_name'], $filePDF)) { 
        echo "Arquivo PDF fez upload." . "<br>"; 
        echo "<a href=\"$filePDF\"> Link arquivo PDF </a>";
    } else {
        echo "Falha ao fazer upload do arquivo PDF." . "<br>";
    }
    // Upload da imagem
    if (move_uploaded_file($_FILES['file_img']['tmp_name'], $imagem)) { 
        echo "Imagem fez upload." . "<br>"; 
        echo "<img src=\"$imagem\" alt=\"figura\">";
    } else {
        echo "Falha ao fazer upload da imagem." . "<br>";
    }
}
?>
    
</body>
</html>

