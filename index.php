<?php
include_once('include/header.inc.php');

function home($msg) {
    if ($msg === 'sim') {
        echo '<div class="mensagem">
                <h2>Usuário ou Senha incoreto!!!</h2>
            </div>';
        session_start();
include_once('include/header.inc.php');
        echo $_SESSION['nome'] . '<br>';
        echo $_SESSION['logado'];
    }

}
function entrar($msg) {
    if ($msg === 'nao') {
        echo '<div class="mensagem">
                <h2>Usuário ou Senha incoreto!!!</h2>
            </div>';
    }

}

function registrar($msg) {
    if ($msg === 'sim') {
        echo '<div class="mensagem">
                <h2>Usuário já cadastrado!!!</h2>
            </div>';
    }

    if ($msg === 'nao') {
        echo '<div class="mensagem">
                <h2>Usuário cadastrado com sucesso!!!</h2>
            </div>';
    }

    if ($msg === 'senha') {
        echo '<div class="mensagem">
                <h2>Senhas são diferentes!!!</h2>
            </div>';
    }
}
if (!isset($_SESSION['logado'])) {
    $_SESSION['logado'] = false;
}

$page = $_GET['page'];

switch ($page) {
    case 'home':
        $msg = $_GET['msg'];
        home($msg);
        include_once 'view/home.view.php';

        break;
    case 'categorias':
        include_once('view/categoria.view.php');
        break;
    case 'registrar':
        $msg = $_GET['msg'];
        include_once('view/registrar.view.php');

        registrar($msg);
        break;
    case 'entrar':
        $msg = $_GET['msg'];
        include_once('view/entrar.view.php');

        entrar($msg);
        break;

    default:
        include_once('view/home.view.php');
        break;
}

include_once('include/footer.inc.php');
?>
