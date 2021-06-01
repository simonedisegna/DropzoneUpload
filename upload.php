<?php
$dt = date("dmY");
if (file_exists("documentos/")) {
    $caminho = "documentos/";
} else {
    mkdir("documentos/", 0755, true);
    $caminho = "documentos/";
}

if (!empty($_FILES)) {
    $tmpFile = $_FILES['file']['tmp_name'];
    $filename = $caminho . time() . '-' . $_FILES['file']['name'];    
    move_uploaded_file($tmpFile, $filename);
}
?>  