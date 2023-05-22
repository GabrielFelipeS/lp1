<?php 

/**
 * Informa o valor de um item do array GET.
 * Caso o item não exista retorna string vazia.
 * 
 * @param name: nome o índice associativo no array GET
 * @return string | number
 */
function getParam($name) {
    return isset($_GET[$name]) ? $_GET[$name] : '';
}

/**
 * Informa o valor de um item do array POST.
 * Caso o item não exista retorna string vazia.
 * 
 * @param name: nome o índice associativo no array POST
 * @return string | number
 */
function postParam($name) {
    return isset($_POST[$name]) ? $_POST[$name] : '';
}


function verificaLogin() {
    $mail = postParam('email');
    $pass = postParam('senha');

    if(strcmp($mail, 'maria@gmail.com') != 0 || $pass != '12345678'){
        header('Location: login.php?error=1');
    } else {
        session_start();
        $_SESSION['email'] = $mail;
        $_SESSION['nome'] = 'Maria da Silva';
        $_SESSION['logado'] = true;
    }
}

function verificaUsuario() {
    session_start();
    if(! $_SESSION['logado'])
        header('Location: login.php');
}

// ler os dados do post
// criar uma consulta sql com estes dados
// executar a consulta ao banco de dados
// verificar se os dados de acesso são corretos
// se estiverem corretos, exibir página inicial
// senão, exibir mensagem de erro
