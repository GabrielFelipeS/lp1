<?php 
include '../inc/connection.php';
include '../lib/database.php';

// Join Natural
$sql = 'SELECT * FROM pessoa, endereco WHERE pessoa.id = id_pessoa';
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)){
    echo $row['nome'].' mora em: '.$row['logradouro'].'<br>';
}

// CREATE
// create('compras', [null, 'Paulo', 'Tarso', 42, 'masculino', 74.45]);


/*/ READ
$v = getAll('pessoa');
foreach ($v as $pessoa) {
    echo $pessoa['nome'].' '.$pessoa['sobrenome'].' tem '.$pessoa['idade'].' anos.<br>';
}*/


// UPDATE
// update('pessoa', ['idade = 22', "nome = 'mariana'"], ['id = 1']);

// DELETE
// delete('pessoa', ['id = 1', 'idade > 20']);