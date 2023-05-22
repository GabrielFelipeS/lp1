<?php 
include '../lib/file_handle.php';

// $placa = $_POST['placa'];
$myfile = fopen('lista_inspecao', "a") or die("Você não tem permissão para gravar neste diretório!");

wline($myfile, $_POST['marca'].' - '.$_POST['modelo']);
wline($myfile, $_POST['placa'].' - '.$_POST['ano']);
wline($myfile, $_POST['telefone'].' - '.$_POST['email']);
wline($myfile, '');
fclose($myfile);

echo 'Veículo registrado com sucesso';

// append : concatenação