<?php

if(! isset($_FILES["file"])) {
    header("location:index.php");
    die();
}

echo "Sucesso!";
$file = $_FILES["file"];

$name = $file["name"];
$tmp_name = $file["tmp_name"];
$size = $file["size"];
$error = $file["error"];
$type = $file["type"];

$message = "";
switch($error) {
    case UPLOAD_ERR_OK:
        $message = "Arquivo gravado com sucesso!";
        break;
    case UPLOAD_ERR_INI_SIZE:
        $message = "Tamanho do arquivo acima do permitido.";
        break;
    case UPLOAD_ERR_FORM_SIZE:
        $message = "Tamanho do arquivo acima do permitido.";
        break;
    case UPLOAD_ERR_NO_FILE:
        $message = "Nenhum arquivo foi escolhido.";
        break;
    case UPLOAD_ERR_PARTIAL:
        $message = "Arquivo incompleto.";
        break;
    case UPLOAD_ERR_NO_TMP_DIR:
        $message = "Área temporária indisponível.";
        break;
    case UPLOAD_ERR_CANT_WRITE:
        $message = "Falta permissão para salvar o arquivo.";
        break;
    case UPLOAD_ERR_EXTENSION:
        $message = "Erro desconhecido, avise o administrador.";
        break;
}

if($error == UPLOAD_ERR_OK) {
    move_uploaded_file($tmp_name, ".\\imgs\\$name");
}
header("location:index.php?message=".$message);
die();

?>