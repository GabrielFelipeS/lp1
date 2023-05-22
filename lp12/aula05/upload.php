<?php 

$host = $_SERVER['HTTP_ORIGIN'];
$root = $_SERVER['DOCUMENT_ROOT'];
$folder = '/LP12/uploads/';
$link = $host.$folder;
$target_dir = $root.$folder;
$prefix = date('ymdhis');
$target_file = $target_dir.$prefix.'_'. basename($_FILES["comprovante"]["name"]);

// descobre a extensão do arquivo carregado
// $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// verifica se o arquivo existe para não sobrescrever
/*if (file_exists($target_file)) {
    echo "Ooooppps, este arquivo já existe.";
    $uploadOk = 0;
} else {
    echo 'Este arquivo não existe neste servidor';
}*/

// move o arquivo carregado para o local que vc determina
@move_uploaded_file($_FILES["comprovante"]["tmp_name"], $target_file);

$content = scandir($target_dir);

for ($i = 2; $i < sizeof($content); $i++) {
    echo '<a href="'.$link.$content[$i].'">'.$content[$i]."</a>";
    echo ' - <a href="delete.php?index='.$i.'">Apagar</a><br>';
}