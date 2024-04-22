<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prog.php" method="POST" enctype="multipart/form-data">
        <label>Selecione uma imagem:</label>
        <input required name="file_img" type="file" accept="image/png, image/jpeg"  />
        <br>
        <label>Selecione um PDF:</label>
        <input required name="file_PDF" type="file" accept="application/pdf" />
        <br>
        <input type="submit" value="Salvar" name="submit">
    </form>
</body>
</html>