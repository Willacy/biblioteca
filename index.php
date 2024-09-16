<?php
require_once './src/Template.php';
require_once './view/TelaUsuario.php';
require_once './view/TelaHome.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$uri = explode("?", $uri)[0];
$uri = preg_replace('/\/{2,}/', '/', $uri);
$uri = explode("/", $uri);
$uri = array_splice($uri, 2);
$tamanho = count($uri);
if ($uri[$tamanho - 1] == "")
    array_pop($uri);
$inicio = 0;

if ($method == "PUT") {
    parse_str(file_get_contents('php://input'), $_PUT);
}

$template = new Template();
$usuario = new TelaUsuario();
$home = new TelaHome();
//echo count($uri) . "|" . $uri[$inicio];
/**
 * Login
 */
if ($method == "GET" and count($uri) == 1 and $uri[$inicio] == "login") {
    // Exibe formulário de Login
    $template->header('Login');
    $template->barra();
    $template->corpo($usuario->telaLogin());
    echo 'DEUS';
} else if ($method == "POST" and count($uri) == 1 and $uri[$inicio] == "login") {
    // Tenta fazer o login
    $usuario->login();
}
/**
 * Tela Home
 */ else if ($method == 'POST' and count($uri) == 1 and $uri[$inicio] == 'home') {
    $tempalte->header('Home');
    $template->barra();
    $template->corpo($home->telaPrincipal());
} else {
    header('Location: /biblioteca/login');
}
?>

<script>
    $('form[method=put],form[method=delete]').on('submit', (e) => {
        e.preventDefault();
        let action = $(e.target).attr('action');
        let metodo = $(e.target).attr('method');
        let data = $(e.target).serialize();
        $.ajax({
            url: action,
            method: metodo,
            data: data,
            context: document.body
        }).done((data) => {
            location.reload();
        });
    })
</script>