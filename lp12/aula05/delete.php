<?php 

$host = 'http://localhost/';
$root = $_SERVER['DOCUMENT_ROOT'];
$folder = '/LP12/uploads/';
$link = $host.$folder;
$target_dir = $root.$folder;

$content = scandir($target_dir);
$file = $content[$_GET['index']];
unlink($target_dir.$file);

for ($i = 2; $i < sizeof($content); $i++) {
    echo '<a href="'.$link.$content[$i].'">'.$content[$i]."</a>";
    echo ' - <a href="delete.php?index='.$i.'">Apagar</a><br>';
}