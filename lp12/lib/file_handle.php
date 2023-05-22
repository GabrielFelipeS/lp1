<?php

/**
 * Escreve uma linha em um arquivo.
 * @param $file: o nome do arquivo
 * @param $txt: o texto a ser escrito
 */
function wline($file, $txt) {
    fwrite($file, "$txt\r\n");
}

function rfile($filename)  {
    $myfile = fopen($filename, "r") or die("Você não tem permissão para gravar neste diretório!");
    $lines = [];

    while (!feof($myfile)) {
        $lines[] = fgets($myfile);
    }

    fclose($myfile);
    return $lines;
}