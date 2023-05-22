<?php
include '../lib/file_handle.php';

$v = rfile('lista_inspecao');
echo implode('<br>', $v);
